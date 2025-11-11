<html>
    <head>
        <title>Department List</title>
    </head>
    <body>
        <h1>Department List</h1>
        <a href="{{ route('department_create') }}">
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
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($departments->count() === 0)
                    <tr>
                        <td colspan="4">No Records found</td>
                    </tr>
                @endif
                @foreach($departments as $department)
                <tr>
                    <td>
                        {{ $department->id }}
                    </td>
                    <td>
                        {{ $department->name }}
                    </td>
                    <td>
                        {{ $department->created_at }}
                    </td>
                    <td>
                        {{ $department->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('department_delete', $department->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('department_edit', $department->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>