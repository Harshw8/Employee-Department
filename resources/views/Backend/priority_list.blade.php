<html>
    <head>
        <title>Priority List</title>
    </head>
    <body>
        <h1>Priority List</h1>
        <a href="{{ route('priority_create') }}">
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
                @if ($priorities->count() === 0)
                    <tr>
                        <td colspan="4">No Record found</td>
                    </tr>
                @endif
                @foreach($priorities as $priority)
                <tr>
                    <td>
                        {{ $priority->id }}
                    </td>
                    <td>
                        {{ $priority->priority_name }}
                    </td>
                    <td>
                        {{ $priority->created_at }}
                    </td>
                    <td>
                        {{ $priority->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('priority_delete', $priority->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('priority_edit', $priority->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>