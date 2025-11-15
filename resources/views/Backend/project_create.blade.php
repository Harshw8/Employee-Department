@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Project Create</h1>
        <form action="{{ route('project_store') }}" method="post">
            @csrf
            @include('Backend.project_form_inputs')
        </form>
@endsection