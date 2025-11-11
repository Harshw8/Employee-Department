<div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $stickyNote?->title }}">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $stickyNote?->description }}</textarea>
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>