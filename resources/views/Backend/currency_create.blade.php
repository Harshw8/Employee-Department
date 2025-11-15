@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Currency Create</h1>
        <a href="{{ route('currency_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('currency_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.currency_form_inputs')

        </form>
@endsection