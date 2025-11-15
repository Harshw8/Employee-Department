@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Priority Edit</h1>
        <a href="{{ route('priority_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('priority_update',['id'=>$priority->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.priority_form_inputs')

        </form>
@endsection