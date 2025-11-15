@extends('backend.layout.master_layout')

@section('main_content')
        <h1>State Create</h1>
        <a href="{{ route('state_list') }}">
            <- BACK
        </a>
        <form action="{{ route('state_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.state_form_inputs')
        </form>
@endsection