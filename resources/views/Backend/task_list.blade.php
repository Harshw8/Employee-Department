@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Task List</h1>
        @if(session()->has('success'))
            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                        <span class="material-icons-outlined fs-2">check_circle</span>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Success Alerts</h6>
                        <div class="text-white">{{ session()->get('success') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('task_create') }}">
                        <button type="button" class="btn btn-primary px-5">Create</button>
                    </a>
                </div>
                <div class="card-body">
        <table class="table table-bordered">
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
                        <a class="btn btn-danger px-5"
                        href="{{ route('task_delete', ['id'=> $task->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a class="btn btn-primary px-5"
                        href="{{ route('task_edit', $task->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
        </div>
@endsection