@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Priority Create</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('priority_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row mt-2">
                <div class="col-md-6">
                <label for="priority_name" class="form-label">Priority Name</label>
                <input type="text" name="priority_name" id="priority_name" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-2">
                <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
                </div>
            </div>

        </form>
        </div>
        </div>
@endsection