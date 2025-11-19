@extends('backend.layout.master_layout')

@section('main_content')
<h1>Announcement List</h1>
        @if(session()->has('success'))
            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white"><span class="material-icons-outlined fs-2">check_circle</span>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 text-white">Success Alerts</h6>
						<div class="text-white">{{ session()->get('success') }}</div>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
        @endif
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary"
                href="{{ route('announcement_create') }}">
                    create
                </a>
            </div>
            <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Announcement By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($announcements->count() === 0)
                    <tr>
                        <td colspan="7">No Records found</td>
                    </tr>
                @endif
                @foreach($announcements as $announcement)
                <tr>
                    <td>
                        {{ $announcement->id }}
                    </td>
                    <td>
                        {{ $announcement->title }}
                    </td>
                    <td>
                        {{ $announcement->description }}
                    </td>
                    <td>
                        {{ $announcement->announcement_by }}
                    </td>
                    <td>
                        {{ $announcement->created_at }}
                    </td>
                    <td>
                        {{ $announcement->updated_at }}
                    </td>
                    <td>
                        <a class="btn btn-danger"
                        href="{{ route('announcement_delete', $announcement->id) }}">
                            Delete
                        </a>
                        
                        <a class="btn btn-primary"
                        href="{{ route('announcement_edit', $announcement->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
@endsection