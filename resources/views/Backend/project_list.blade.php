<html>
    <head>
        <title>Project List</title>
    </head>
    <body>
        <h1>Project List</h1>
        <a href="{{ route('project_create') }}">
            <button type="button">create</button>
        </a>
        @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($projects->count() === 0)
                    <tr>
                        <td colspan="8">No Record found</td>
                    </tr>
                @endif
                @foreach($projects as $project)
                <tr>
                    <td>
                        {{ $project->id }}
                    </td>
                    <td>
                        {{ $project->project_name }}
                    </td>
                    <td>
                        {{ $project->project_description }}
                    </td>
                    <td>
                        {{ $project->client_name }}
                    </td>
                    <td>
                        {{ $project->client_email }}
                    </td>
                    <td>
                        {{ $project->created_at }}
                    </td>
                    <td>
                        {{ $project->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('project_delete', $project->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('project_edit', $project->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>