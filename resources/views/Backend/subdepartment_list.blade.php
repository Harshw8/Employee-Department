@extends('backend.layout.master_layout')

@section('main_content')
        <h1>SubDepartment List</h1> 
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
                <a href="{{ route('subdepartment_create') }}" class="btn ripple btn-primary px-5">create</a>
            </div>
            <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sub Department Name</th>
                    <th>Department Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($subdepartments->count() === 0)
                    <tr >
                        <td colspan="6">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($subdepartments as $subdepartment)
                <tr>
                    <td>
                        {{ $subdepartment->id }}
                    </td>
                    <td>
                        {{ $subdepartment->name }}
                    </td>
                    <td>
                        {{ $subdepartment->department->name }}
                    </td>
                    <td>
                        {{ $subdepartment->created_at }}
                    </td>
                    <td>
                        {{ $subdepartment->updated_at }}
                    </td>
                    <td>
                        <a class="btn ripple btn-danger px-5"
                        href="{{ route('subdepartment_delete', $subdepartment->id) }}">
                            DELETE
                        </a> 

                        <a class="btn ripple btn-primary px-5"
                        href="{{ route('subdepartment_edit', $subdepartment->id) }}">
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