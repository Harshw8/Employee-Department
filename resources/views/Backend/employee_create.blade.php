@extends('backend.layout.master_layout')

@section('main_content')
<h1>Employee Create</h1>

<div class="row mt-2">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('employee_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- First & Last Name --}}
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>

                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                    </div>

                    {{-- Department & Sub Department --}}
                    <div class="row mb-2">
                                <div class="col-md-4">
                                <label for="department_id" class="form-label">Department</label>
                <select id="department_id" name="department_id" class="department_class form-select">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="subdepartment_id" class="form-label">Sub Department</label>
                <select id="subdepartment_id" name="subdepartment_id" class="subdepartment_class form-select">
                    <option value="">Select Sub Department</option>
                    
                </select>
            </div>
        </div>

                    {{-- Salary --}}
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary">
                        </div>
                        <div class="col-md-6">
                            <label for="profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" name="profile_image" id="profile_image">
                        </div>
                    </div>

                    {{-- Gender --}}
                    <div class="row mb-2">
                        <div class="col-md-10">
                            <label for="gender" class="form-label">Gender</label><br>

                            <input type="radio" 
                                   class="form-check-input" 
                                   id="gender_male" 
                                   name="gender" 
                                   value="male">
                            <label for="gender_male" class="form-check-label">Male</label>

                            <input type="radio" 
                                   class="form-check-input ms-3" 
                                   id="gender_female" 
                                   name="gender" 
                                   value="female">
                            <label for="gender_female" class="form-check-label ms-1">Female</label>
                        </div>
                    </div>

                    {{-- Birth Date --}}
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" id="birth_date">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        </div>
                    </div>

                </form>

                {{-- JQuery --}}
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

                {{-- URL for AJAX --}}
                <script>
                    var ROUTE_FETCH_SUBDEPARTMENT = "{{ route('subdepartment_fetchDropDownSubDepartment', ['department_id' => ':id']) }}";
                </script>

                {{-- Load Subdepartment script --}}
                <script src="{{ asset('assets/js/subdepartment.js') }}"></script>

@endsection
