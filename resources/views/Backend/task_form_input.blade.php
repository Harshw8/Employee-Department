<div class="col-md-6">
                <div class="row mb-2">
                <label for="task_title" class="form-label">Task Title</label>
                <input type="text" name="task_title" class="form-control" id="task_title" value="{{ $task?->task_title }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="row mb-2">
                <label for="task_description" class="form-label">Task Description</label>
                <textarea name="task_description" class="form-control" id="task_description">{{ $task?->task_description }}</textarea>
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-grd-primary px-5">SAVE</button>
            </div>