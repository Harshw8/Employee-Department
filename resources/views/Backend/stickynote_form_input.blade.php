<div class="col-md-6">
                <div class="row mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $stickyNote?->title }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="row mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description">{{ $stickyNote?->description }}</textarea>
                </div>
            </div>

            <div class="col-md-2">
                <div class="row mb-2">
                <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
                </div>
            </div>