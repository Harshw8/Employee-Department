@extends('backend.layout.master_layout')

@section('main_content')
<div class="col-md-4">
        <div class="card">
            <div class="card-body">
        <form action="{{ route('city_update', [ 'id' => $city->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $city->name }}">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                <label for="country_id" class="form-label">Country</label> 
                <select id="country_id" name="country_id" class="country_class form-select">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ $country->id == $city->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                <label for="state_id" class="form-label">State</label> 
                <select id="state_id" name="state_id" class="state_class form-select">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ $state->id == $city->state_id ? 'selected' : '' }}>{{ $state->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
                
            <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
        </form>
        </div>
        </div>        
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_STATE= "{{ route('state_fetchDropDownState', ['country_id' => ':id']) }}"
            
        </script>
        <script src="{{ asset('assets/js/state.js') }}"></script>
    @endsection