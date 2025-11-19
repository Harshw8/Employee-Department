<div class="col-md-8">
    <label for="department_id" class="form-label">Department</label>
    <select name="department_id" class="form-select">
        @foreach($departments as $department)
            @if ($subdepartment?->department_id == $department->id)
                <option value="{{ $department->id }}" selected> {{ $department->name }} </option>
            @else
                <option value="{{ $department->id }}"> {{ $department->name }} </option>
            @endif
        @endforeach

    </select>
</div>
<div class="row mt-2">
<div class="col-md-8">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required value="{{ $subdepartment?->name }}">
 </div>
</div>
<div class="row mt-2">
    <div class="col-md-2">
    <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
    </div>
</div>