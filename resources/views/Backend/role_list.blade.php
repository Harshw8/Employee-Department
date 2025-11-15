@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Role List</h1>
        <a href="{{ route('role_create') }}">
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
                @if ($roles->count() === 0)
                    <tr>
                        <td colspan="4">No Records found</td>
                    </tr>
                @endif
                @foreach($roles as $role)
                <tr>
                    <td>
                        {{ $role->id }}
                    </td>
                    <td>
                        {{ $role->Role_name }}
                    </td>
                    <td>
                        {{ $role->created_at }}
                    </td>
                    <td>
                        {{ $role->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('role_delete', ['id'=> $role->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('role_edit', $role->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection