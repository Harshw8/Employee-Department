@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Priority Create</h1>
        <a href="{{ route('priority_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('priority_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div>
                <label for="priority_name">Priority Name</label>
                <input type="text" name="priority_name" id="priority_name">
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>

        </form>
@endsection