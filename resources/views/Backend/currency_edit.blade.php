@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Edit Currency</h1>
        <div class="card">
            <div class="card-body">
        @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
        @endif
        <form action="{{ route('currency_update', $currency->id) }}" method="post">
            @csrf
            @include('backend.currency_form_inputs')
        </form>
    </div>
    </div>
    @endsection