<div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $employeeletter?->title }}">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $employeeletter?->description }}</textarea>
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
