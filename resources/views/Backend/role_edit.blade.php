@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Role Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('role_update',['id'=>$role->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.role_form_inputs')

        </form>
        </div>
        </div>
        </div>
@endsection