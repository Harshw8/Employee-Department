@extends('backend.layout.master_layout')

@section('main_content')
        <h1>SubDepartment Create</h1>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('subdepartment_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.subdepartment_form_inputs')
        </form>
        </div>
        </div>
        </div>
        
@endsection