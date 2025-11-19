@extends('backend.layout.master_layout')

@section('main_content')

<h1>City Create</h1>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('city_store') }}" method="POST">
                    @csrf

                    {{-- Country + State --}}
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Country</label>
                            <select id="country_id" name="country_id" class="country_class form-select">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label"class="form-label">State</label>
                            <select id="state_id" class="state_class form-select" name="state_id">
                                <option value="">Select State</option>
                            </select>
                        </div>
                    </div>

                    {{-- City Name --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label"class="form-label">City Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $('#country_id').on('change', function () {
        let id = $(this).val();

        $('#state_id').html('<option>Loading...</option>');

        $.ajax({
            url: "/state/fetchDropDownState/" + id,
            type: "GET",
            success: function (response) {
                $('#state_id').html(response.html);
            }
        });
    });
</script>

@endsection
