<html>
    <head>
        <title>Employee Create</title>
    </head>
    <body>
        <h1>Employee Create</h1>
        <a href="{{ route('employee_list') }}">
            <- BACK
        </a>
        <form action="{{ route('employee_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
            </div>

            <div>
                <label>Department</label>
                <select id="department_id" name="department_id" class="department_class">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Sub Department</label>
                <select id="subdepartment_id" name="subdepartment_id">
                    <option value="">Select Sub Department</option>
                    
                </select>
            </div>
            <div>
                <label for="salary">Salary</label>
                <input type="number" name="salary" >
            </div>
            <div>
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image">
            </div>

            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <div>
                <label for="birth_date">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date">
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