<html>
    <head>
        <title>Employee Letter List</title>
    </head>
    <body>
        <h1>Employee Letter List</h1>
        <a href="{{ route('employeeletter_create') }}">
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($employee_letters->count() === 0)
                    <tr>
                        <td colspan="7">No Records found</td>
                    </tr>
                @endif
                @foreach($employee_letters as $employee_letter)
                <tr>
                    <td>
                        {{ $employee_letter->id }}
                    </td>
                    <td>
                        {{ $employee_letter->title }}
                    </td>
                    <td>
                        {{ $employee_letter->description }}
                    </td>
                    <td>
                        {{ $employee_letter->created_at }}
                    </td>
                    <td>
                        {{ $employee_letter->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('employeeletter_delete', $employee_letter->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('employeeletter_edit', $employee_letter->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>