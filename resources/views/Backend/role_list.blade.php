@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Role List</h1>
        
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('role_create') }}">
                        <button type="button" class="btn btn-primary px-5">Create</button>
                    </a>
                </div>
                <div class="card-body">
        <table class="table table-bordered">
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
                @if ($roles->count() === 0)
                    <tr>
                        <td colspan="4">No Records found</td>
                    </tr>
                @endif
                @foreach($roles as $role)
                <tr>
                    <td>
                        {{ $role->id }}
                    </td>
                    <td>
                        {{ $role->Role_name }}
                    </td>
                    <td>
                        {{ $role->created_at }}
                    </td>
                    <td>
                        {{ $role->updated_at }}
                    </td>
                    <td>
                        <a class="btn btn-danger px-5"
                        href="{{ route('role_delete', ['id'=> $role->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a class="btn btn-primary px-5"
                        href="{{ route('role_edit', $role->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
        </div>
@endsection