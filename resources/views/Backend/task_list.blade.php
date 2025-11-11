<html>
    <head>
        <title>Task List</title>
    </head>
    <body>
        <h1>Task List</h1>
        <a href="{{ route('task_create') }}">
            <button type="button">create</button>
        </a>
        @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($tasks->count() === 0)
                    <tr>
                        <td colspan="6">No Records found</td>
                    </tr>
                @endif
                @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->id }}
                    </td>
                    <td>
                        {{ $task->task_title }}
                    </td>
                    <td>
                        {{ $task->task_description }}
                    </td>
                    <td>
                        {{ $task->created_at }}
                    </td>
                    <td>
                        {{ $task->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('task_delete', ['id'=> $task->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('task_edit', $task->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html> 