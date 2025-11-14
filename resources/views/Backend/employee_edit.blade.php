<html>
    <head>
        <title>Employee Edit</title>
    </head>
    <body>
        <h1>Employee Edit</h1>
        <a href="{{ route('employee_list') }}">
            <- BACK
        </a>
        <form action="{{ route('employee_update', [ 'id' => $employee->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ $employee->first_name }}">
            </div>
            <div>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ $employee->last_name }}">
            </div>

            <div>
                <label>Department</label>
                <select id="department_id" name="department_id" class="department_class">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ $department->id == $employee->department_id ? 'selected' : '' }} >{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Sub Department</label>
                <select id="subdepartment_id" name="subdepartment_id">
                    <option value="">Select Sub Department</option>
                    @foreach ($subdepartments as $subdepartment)
                        <option value="{{ $subdepartment->id }}" {{ $subdepartment->id == $employee->subdepartment_id ? 'selected' : '' }}>{{ $subdepartment->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="salary">Salary</label>
                <input type="number" name="salary" value="{{ $employee->salary }}">
            </div>
            <div>
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image">
            </div>

            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male" {{ $employee->gender == 'male' ? 'checked' : '' }}> Male
                <input type="radio" name="gender" value="female" {{ $employee->gender == 'female' ? 'checked' : '' }}> Female
            </div>
            <div>
                <label for="birth_date">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" value="{{ $employee->birth_date }}">
            </div>
            
            <button type="submit">Submit</button>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_SUBDEPARTMENT = "{{ route('subdepartment_fetchDropDownSubDepartment', ['department_id' => ':id']) }}"
            
        </script>
        <script src="{{ asset('assets/js/subdepartment.js') }}"></script>
    </body>
</html>  