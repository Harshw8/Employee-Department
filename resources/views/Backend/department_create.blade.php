@extends('backend.layout.master_layout')

@section('main_content')
<h1>Department Create</h1>
<div class="col-md-4">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('department_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.department_form_inputs')

        </form>
    </div>
</div>
</div>
@endsection
