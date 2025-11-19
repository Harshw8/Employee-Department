@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Employee List</h1>
        @if (Session::has('success'))
            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white"><span class="material-icons-outlined fs-2">check_circle</span>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 text-white">Success Alerts</h6>
						<div class="text-white">{{ session()->get('success') }}</div>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
        @endif
        <div class="card">
            <div class="card-header">
                <a href="{{ route('employee_create') }}" class="btn ripple btn-primary px-5">create</a>
            </div>
            <div class="card-body">
        <table class="table table-bordered mb-0">  
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
                        <a class="btn btn-danger px-5"
                        href="{{ route('employee_delete', $employee->id) }}">
                            DELETE
                        </a> 

                        <a class="btn btn-primary px-5"
                        href="{{ route('employee_edit', $employee->id) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
