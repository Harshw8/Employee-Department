@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Task Create</h1>
        <a href="{{ route('task_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('task_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.task_form_input')
        </form>
@endsection