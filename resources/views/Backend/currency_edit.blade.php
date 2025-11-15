@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Edit Currency</h1>
        <a href="{{ route('currency_list') }}">
            <button type="button">Back</button>
        </a>
        @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
        @endif
        <form action="{{ route('currency_update', $currency->id) }}" method="post">
            @csrf
            @include('backend.currency_form_inputs')
        </form>
@endsection