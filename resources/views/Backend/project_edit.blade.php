@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Project Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('project_update', $project->id) }}" method="post">
            @csrf
            @include('Backend.project_form_inputs')
        </form>
        </div>
        </div>
        </div>
@endsection