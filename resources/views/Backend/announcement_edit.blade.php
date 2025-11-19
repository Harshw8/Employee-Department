@extends('backend.layout.master_layout')

@section('main_content')
<h1>Announcement Edit</h1>
<div class="col-md-6">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('announcement_update',['id'=>$announcement->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf     
            @include('Backend.announcement_form_inputs')
        </form>
        </div>
        </div>
        </div>
@endsection