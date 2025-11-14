<div>
    <label for="country_id">Country</label>
    <select name="country_id">
        @foreach($countries as $country)
            @if ($state?->country_id == $country->id)
                <option value="{{ $country->id }}" selected> {{ $country->name }} </option>
            @else
                <option value="{{ $country->id }}"> {{ $country->name }} </option>
            @endif
        @endforeach

    </select>
</div>
<div>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" required value="{{ $state?->name }}">
</div>

<div>
    <button type="submit">SAVE</button>
</div>