@extends('backend.layout.master_layout')

@section('main_content')
        <h1>State Edit</h1>
        <a href="{{ route('state_list') }}">
            <- BACK
        </a>
        <form action="{{ route('state_update', $state->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.state_form_inputs')
        </form>
@endsection