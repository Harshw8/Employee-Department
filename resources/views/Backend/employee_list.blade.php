<html>
    <head>
        <title>Employee List</title>
    </head>
    <body>
        <h1>Employee List</h1>
        <a href="{{ route('employee_create') }}">Create Employee</a>
        @if (Session::has('success'))
            <p>
                {{ Session::get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>  
                    <th>Department</th>
                    <th>Sub Department</th>
                    <th>Salary</th>
                    <th>Profile Image</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($employees->count() === 0)
                    <tr>
                        <td colspan="12">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($employees as $employee)
                <tr>
                    <td>
                        {{ $employee->id }}
                    </td>
                    <td>
                        {{ $employee->first_name }}
                    </td>
                    <td>
                        {{ $employee->last_name }}
                    </td>
                    <td>
                        {{ optional($employee->department)->name }}
                    </td>
                    <td>
                        {{ optional($employee->subdepartment)->name }}
                    </td>
                    <td>
                        {{ $employee->salary }}
                    </td>
                    <td>
                        <img src="{{ asset('storage/' . $employee->profile_image) }}" height="40" alt="Profile Image">
                    </td>
                    <td>
                        {{ $employee->gender }}
                    </td>
                    <td>
                        {{ $employee->birth_date }}
                    </td>
                    <td>
                        {{ $employee->created_at }}
                    </td>
                    <td>
                        {{ $employee->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('employee_delete', $employee->id) }}">
                            DELETE
                        </a> <br/>

                        <a href="{{ route('employee_edit', $employee->id) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
