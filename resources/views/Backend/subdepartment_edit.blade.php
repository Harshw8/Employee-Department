@extends('backend.layout.master_layout')

@section('main_content')
        <h1>SubDepartment Edit</h1>
        <a href="{{ route('subdepartment_list') }}">
            <- BACK
        </a>
        <form action="{{ route('subdepartment_update', $subdepartment->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.subdepartment_form_inputs')
        </form>
        
@endsection