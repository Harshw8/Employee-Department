            <div class="row mb-2">
                <div class="col-md-4">
                <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $announcement->title }}">
            </div>
          
            <div class="row mb-2">
            <div class="col-md-12">
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description">{{ $announcement->description }}</textarea>
            </div>
            </div>
            </div>
            <div class="row mb-2">
            <div class="col-md-12">
            <div class="form-group">
                <label for="announcement_by" class="form-label">Announcement By</label>
                <input type="text" class="form-control" name="announcement_by" id="announcement_by" value="{{ $announcement?->announcement_by }}">
            </div>
            </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                <button type="submit" class="btn btn-grd-primary px-4">SAVE</button>
                </div>
            </div>