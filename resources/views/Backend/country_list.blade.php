@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Country List</h1>
        <a href="{{ route('country_create') }}">
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
                    <th>Country Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($countries->count() === 0)
                    <tr>
                        <td colspan="4">No Records found</td>
                    </tr>
                @endif
                @foreach($countries as $country)
                <tr>
                    <td>
                        {{ $country->id }}
                    </td>
                    <td>
                        {{ $country->name }}
                    </td>
                    <td>
                        {{ $country->created_at }}
                    </td>
                    <td>
                        {{ $country->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('country_delete', ['id'=> $country->id]) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('country_edit', $country->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection 