<div>
    <label for="department_id">Department</label>
    <select name="department_id">
        @foreach($departments as $department)
            @if ($subdepartment?->department_id == $department->id)
                <option value="{{ $department->id }}" selected> {{ $department->name }} </option>
            @else
                <option value="{{ $department->id }}"> {{ $department->name }} </option>
            @endif
        @endforeach

    </select>
</div>
<div>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" required value="{{ $subdepartment?->name }}">
</div>

<div>
    <button type="submit">SAVE</button>
</div>