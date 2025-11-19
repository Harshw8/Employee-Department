@extends('backend.layout.master_layout')

@section('main_content')
<h1>Country List</h1>

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

    <div class="card-header border-bottom pb-2">
        <a href="{{ route('country_create') }}" class="btn btn-primary px-5">
            Create
        </a>
    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Country Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @if ($countries->count() === 0)
                    <tr>
                        <td colspan="5">No Records Found</td>
                    </tr>
                @endif

                @foreach($countries as $country)
                <tr>
                    <td>{{ $country->id }}</td>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->created_at }}</td>
                    <td>{{ $country->updated_at }}</td>
                    <td>
                        <a class="btn btn-danger px-5" href="{{ route('country_delete', $country->id) }}">
                            Delete
                        </a>
                        <br>
                        <a class="btn btn-primary px-5 mt-1" href="{{ route('country_edit', $country->id) }}">
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
