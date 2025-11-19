@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Currency Create</h1>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('currency_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.currency_form_inputs')

        </form>
        </div>
        </div>
        </div>
@endsection