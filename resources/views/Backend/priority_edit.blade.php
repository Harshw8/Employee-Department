@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Priority Edit</h1>
        <div class="col-md-6">
                <div class="card">
                        <div class="card-body">
        <form action="{{ route('priority_update',['id'=>$priority->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.priority_form_inputs')

        </form>
    </div>
    </div>
    </div>
@endsection