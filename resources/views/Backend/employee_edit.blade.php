@extends('backend.layout.master_layout')

@section('main_content')
<h1>Employee Edit</h1>
<div class="col-md-6">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('employee_update', [ 'id' => $employee->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $employee->first_name }}">
            </div>
            <div>
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $employee->last_name }}">
            </div>

            <div class="row mb-2">
                <div class="col-md-4">
                <label for="department_id" class="form-label">Department</label>
                <select id="department_id" name="department_id" class="department_class form-select">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ $department->id == $employee->department_id ? 'selected' : '' }} >{{ $department->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-4">
                <label for="subdepartment_id" class="form-label">Sub Department</label>
                <select id="subdepartment_id" name="subdepartment_id" class="subdepartment_class form-select">
                    <option value="">Select Sub Department</option>
                    @foreach ($subdepartments as $subdepartment)
                        <option value="{{ $subdepartment->id }}" {{ $subdepartment->id == $employee->subdepartment_id ? 'selected' : '' }}>{{ $subdepartment->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div>
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" name="salary" value="{{ $employee->salary }}">
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                <label for="profile_image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" name="profile_image" id="profile_image">
                </div>
            </div>

            <div>
                <label for="gender" class="form-label">Gender</label>
                <input type="radio" class="form-check-input" name="gender" value="male" {{ $employee->gender == 'male' ? 'checked' : '' }}> Male
                <input type="radio" class="form-check-input" name="gender" value="female" {{ $employee->gender == 'female' ? 'checked' : '' }}> Female
            </div>
            <div>
                <label for="birth_date" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="birth_date" id="birth_date" value="{{ $employee->birth_date }}">
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_SUBDEPARTMENT = "{{ route('subdepartment_fetchDropDownSubDepartment', ['department_id' => ':id']) }}"
            
        </script>
        <script src="{{ asset('assets/js/subdepartment.js') }}"></script>
    @endsection