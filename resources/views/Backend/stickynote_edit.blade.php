@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Sticky Note Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('stickynote_update',['id'=>$stickyNote->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf     
            @include('Backend.stickynote_form_input')

        </form>
        </div>
        </div>
        </div>
@endsection