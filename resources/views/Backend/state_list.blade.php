@extends('backend.layout.master_layout')

@section('main_content')
        <h1>State List</h1>
        <a href="{{ route('state_create') }}">Create State</a>
        @if (Session::has('success'))
            <p>
                {{ Session::get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>State Name</th>
                    <th>Country Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($states->count() === 0)
                    <tr >
                        <td colspan="6">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($states as $state)
                <tr>
                    <td>
                        {{ $state->id }}
                    </td>
                    <td>
                        {{ $state->name }}
                    </td>
                    <td>
                        {{ $state->country->name }}
                    </td>
                    <td>
                        {{ $state->created_at }}
                    </td>
                    <td>
                        {{ $state->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('state_delete', $state->id) }}">
                            DELETE
                        </a> <br/>

                        <a href="{{ route('state_edit', $state->id) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection