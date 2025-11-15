@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Leave List</h1>
        <a href="{{ route('leave_create') }}">
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
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($leaves->count() === 0)
                    <tr>
                        <td colspan="4">No Records found</td>
                    </tr>
                @endif
                @foreach($leaves as $leave)
                <tr>
                    <td>
                        {{ $leave->id }}
                    </td>
                    <td>
                        {{ $leave->leave_name }}
                    </td>
                    <td>
                        {{ $leave->created_at }}
                    </td>
                    <td>
                        {{ $leave->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('leave_delete', ['id'=> $leave->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('leave_edit', $leave->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection