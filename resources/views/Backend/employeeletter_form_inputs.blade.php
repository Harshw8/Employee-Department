            <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" value="{{ $employeeletter?->title }}" class="form-control">
            </div>
            <div class="row mb-2">
            <div class="col-mt-12">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $employeeletter?->description }}</textarea>
            </div>
            </div>
            <div class="row mb-2">
            <div class="col-md-2">
                <button type="submit" class="btn btn-grd-primary px-4">Save</button>
            </div>
        </div>
