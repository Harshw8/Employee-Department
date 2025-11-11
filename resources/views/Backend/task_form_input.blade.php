<div>
                <label for="task_title">Task Title</label>
                <input type="text" name="task_title" id="task_title" value="{{ $task?->task_title }}">
            </div>

            <div>
                <label for="task_description">Task Description</label>
                <textarea name="task_description" id="task_description">{{ $task?->task_description }}</textarea>
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>