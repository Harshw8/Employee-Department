@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Leave Edit</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('leave_update',['id'=>$leave->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.leave_form_inputs')

        </form>
        </div>
        </div>
        </div>
@endsection