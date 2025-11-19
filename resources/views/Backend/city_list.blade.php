@extends('backend.layout.master_layout')

@section('main_content')
<h1>City List</h1>
        @if (Session::has('success'))
            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                        <span class="material-icons-outlined fs-2">check_circle</span>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Success</h6>
                        <div class="text-white">{{ session()->get('success') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
<div class="card">
        <div class="card-header border-bottom pb-2">
            <a href="{{ route('city_create') }}" class="btn btn-primary">
                Create City
            </a>
        </div>
<div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City Name</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @if ($cities->count() == 0)
                    <tr>
                        <td colspan="7">NO RECORD FOUND</td>
                    </tr>
                @endif

                @foreach ($cities as $city)
                    <tr>
                        <td>
                            {{ $city->id }}
                        </td>
                        <td>
                            {{ $city->name }}
                        </td>
                        <td>
                            {{ optional($city->country)->name }}
                        </td>
                        <td>
                            {{ optional($city->state)->name }}
                        </td>
                        <td>
                            {{ $city->created_at }}
                        </td>
                        <td>
                            {{ $city->updated_at }}
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('city_delete', ['id' => $city->id]) }}">
                                DELETE
                            </a>
                            <br>
                            <a class="btn btn-primary mt-1" href="{{ route('city_edit', ['id' => $city->id]) }}">
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
