@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Edit Employee Letter</h1>
        <div class="card">
            <div class="card-body">
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
        <form action="{{ route('employeeletter_update', $employeeletter->id) }}" method="post">
            @csrf
            @include('backend.employeeletter_form_inputs')
        </form>
        </div>
        </div>
@endsection
    