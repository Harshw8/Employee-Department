@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Task Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('task_update',['id'=>$task->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.task_form_input')

        </form>
        </div>
        </div>
        </div>
@endsection