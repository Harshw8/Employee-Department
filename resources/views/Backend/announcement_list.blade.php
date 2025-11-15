@extends('backend.layout.master_layout')

@section('main_content')
<h1>Announcement List</h1>
        <a href="{{ route('announcement_create') }}">
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
                        <a href="{{ route('announcement_delete', $announcement->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('announcement_edit', $announcement->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection