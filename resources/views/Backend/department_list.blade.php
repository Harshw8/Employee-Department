@extends('backend.layout.master_layout')

@section('main_content')
<h1>Department List</h1>
        @if(session()->has('success'))
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
                <a href="{{ route('department_create') }}" class="btn ripple btn-primary px-5">create</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
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
                        <a class="btn ripple btn-danger px-5"
                        href="{{ route('department_delete', $department->id) }}">
                            Delete
                        </a>
                        
                        <a class="btn ripple btn-primary px-5"
                        href="{{ route('department_edit', $department->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
</div>
</div>
        
