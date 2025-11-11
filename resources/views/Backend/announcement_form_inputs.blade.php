            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $announcement->title }}">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $announcement->description }}</textarea>
            </div>

            <div>
                <label for="announcement_by">Announcement By</label>
                <input type="text" name="announcement_by" id="announcement_by" value="{{ $announcement?->announcement_by }}">
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>