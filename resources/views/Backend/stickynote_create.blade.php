@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Sticky Note Create</h1>
        <a href="{{ route('stickynote_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('stickynote_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.stickynote_form_input')

        </form>
@endsection