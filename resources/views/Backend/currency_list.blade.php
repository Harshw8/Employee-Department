@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Currency List</h1>
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
                <a href="{{ route('currency_create') }}" class="btn btn-primary px-5">
                    create
                </a>
            </div>
            <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Country</th>
                    <th>Currency Name</th>
                    <th>Currency Symbol</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($currencies->count() === 0)
                    <tr>
                        <td colspan="7">No Records found</td>
                    </tr>
                @endif
                @foreach($currencies as $currency)
                <tr>
                    <td>
                        {{ $currency->id }}
                    </td>
                    <td>
                        {{ $currency->country }}
                    </td>
                    <td>
                        {{ $currency->currency_name }}
                    </td>
                    <td>
                        {{ $currency->currency_symbol }}
                    </td>
                    <td>
                        {{ $currency->created_at }}
                    </td>
                    <td>
                        {{ $currency->updated_at }}
                    </td>
                    <td>
                        <a class="btn btn-danger px-5"
                        href="{{ route('currency_delete', $currency->id) }}">
                            Delete
                        </a><br/>
                        
                        <a class="btn btn-primary px-5"
                        href="{{ route('currency_edit', $currency->id) }}">
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