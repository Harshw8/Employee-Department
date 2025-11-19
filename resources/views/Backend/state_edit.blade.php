@extends('backend.layout.master_layout')

@section('main_content')
        <h1>State Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('state_update', $state->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.state_form_inputs')
        </form>
        </div>
        </div>
        </div>
@endsection