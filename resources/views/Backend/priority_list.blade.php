@extends('backend.layout.master_layout')

@section('main_content')
<h1>Priority List</h1>

<div class="col-md-12">
    <div class="card">

        <div class="card-header">
            <a href="{{ route('priority_create') }}">
                <button type="button" class="btn btn-primary px-5">Create</button>
            </a>
        </div>

        @if(session()->has('success'))
        <div class="card-body">
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
        </div>
        @endif

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
                    @if ($priorities->count() === 0)
                        <tr>
                            <td colspan="5">No Record found</td>
                        </tr>
                    @endif

                    @foreach($priorities as $priority)
                    <tr>
                        <td>{{ $priority->id }}</td>
                        <td>{{ $priority->priority_name }}</td>
                        <td>{{ $priority->created_at }}</td>
                        <td>{{ $priority->updated_at }}</td>
                        <td>
                            <a class="btn btn-danger px-5"
                               href="{{ route('priority_delete', $priority->id) }}">
                                Delete
                            </a>

                            <a class="btn btn-primary px-5 mt-1"
                               href="{{ route('priority_edit', $priority->id) }}">
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
