@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Project List</h1>
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
        <div class="card">
            <div class="card-header">
                <a href="{{ route('project_create') }}">
                    <button type="button" class="btn btn-primary px-5">Create</button>
                </a>
            </div>
        <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($projects->count() === 0)
                    <tr>
                        <td colspan="8">No Record found</td>
                    </tr>
                @endif
                @foreach($projects as $project)
                <tr>
                    <td>
                        {{ $project->id }}
                    </td>
                    <td>
                        {{ $project->project_name }}
                    </td>
                    <td>
                        {{ $project->project_description }}
                    </td>
                    <td>
                        {{ $project->client_name }}
                    </td>
                    <td>
                        {{ $project->client_email }}
                    </td>
                    <td>
                        {{ $project->created_at }}
                    </td>
                    <td>
                        {{ $project->updated_at }}
                    </td>
                    <td>
                        <a class="btn btn-danger px-5"
                        href="{{ route('project_delete', $project->id) }}">
                            Delete
                        </a>
                        
                        <a class="btn btn-primary px-5"
                        href="{{ route('project_edit', $project->id) }}">
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