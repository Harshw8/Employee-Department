@extends('backend.layout.master_layout')

@section('main_content')
<h1>Employee Letter List</h1>

<div class="card">

    <div class="card-header border-bottom pb-2">
        <a class="btn btn-primary px-5" href="{{ route('employeeletter_create') }}">
            Create
        </a>
    </div>

    <div class="card-body">

        @if(session()->has('success'))
        <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white">
                    <span class="material-icons-outlined fs-2">check_circle</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Success Alerts</h6>
                    <div class="text-white">{{ session()->get('success') }}</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <table class="table table-bordered">
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
                    <td>{{ $employee_letter->id }}</td>
                    <td>{{ $employee_letter->title }}</td>
                    <td>{{ $employee_letter->description }}</td>
                    <td>{{ $employee_letter->created_at }}</td>
                    <td>{{ $employee_letter->updated_at }}</td>
                    <td>
                        <a class="btn btn-danger px-5" href="{{ route('employeeletter_delete', $employee_letter->id) }}">
                            Delete
                        </a>

                        <a class="btn btn-primary px-5 mt-1" href="{{ route('employeeletter_edit', $employee_letter->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
