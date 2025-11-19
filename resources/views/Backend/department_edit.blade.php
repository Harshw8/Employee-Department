@extends('backend.layout.master_layout')

@section('main_content')
<h1>Department Edit</h1>
<div class="col-md-4">
<div class="card">
    <div class="card-body">
        <a href="{{ route('department_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('department_update',['id'=>$department->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.department_form_inputs')
        </form>
    </div>
</div>
</div>
@endsection