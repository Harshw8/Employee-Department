@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Sticky Note List</h1>
        <a href="{{ route('stickynote_create') }}">
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
                @if ($stickyNotes->count() === 0)
                    <tr>
                        <td colspan="6">No Records found</td>
                    </tr>
                @endif
                @foreach($stickyNotes as $stickyNote)
                <tr>
                    <td>
                        {{ $stickyNote->id }}
                    </td>
                    <td>
                        {{ $stickyNote->title }}
                    </td>
                    <td>
                        {{ $stickyNote->description }}
                    </td>
                    <td>
                        {{ $stickyNote->created_at }}
                    </td>
                    <td>
                        {{ $stickyNote->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('stickynote_delete', ['id'=> $stickyNote->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('stickynote_edit', $stickyNote->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection