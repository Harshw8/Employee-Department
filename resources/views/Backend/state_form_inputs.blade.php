<div class="col-md-6">
    <div class="row mb-2">
    <label for="country_id"class="form-label">Country</label>
    <select name="country_id" class="country_class form-select">
        @foreach($countries as $country)
            @if ($state?->country_id == $country->id)
                <option value="{{ $country->id }}" selected> {{ $country->name }} </option>
            @else
                <option value="{{ $country->id }}"> {{ $country->name }} </option>
            @endif
        @endforeach

    </select>
    </div>
</div>
<div class="col-md-6">
    <div class="row mb-2">
    <label for="name"class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required value="{{ $state?->name }}">
    </div>
</div>

<div class="col-md-2">
    <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
</div>