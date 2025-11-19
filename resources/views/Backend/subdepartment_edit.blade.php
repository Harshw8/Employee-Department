@extends('backend.layout.master_layout')

@section('main_content')
        <h1>SubDepartment Edit</h1>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('subdepartment_update', $subdepartment->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('backend.subdepartment_form_inputs')
                </form>
            </div>
        </div>
        </div>
        
@endsection