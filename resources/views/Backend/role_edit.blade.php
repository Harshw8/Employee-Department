@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Role Edit</h1>
        <a href="{{ route('role_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('role_update',['id'=>$role->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.role_form_inputs')

        </form>
@endsection