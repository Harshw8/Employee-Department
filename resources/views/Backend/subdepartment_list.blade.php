@extends('backend.layout.master_layout')

@section('main_content')
        <h1>SubDepartment List</h1>
        <a href="{{ route('subdepartment_create') }}">Create SubDepartment</a>
        @if (Session::has('success'))
            <p>
                {{ Session::get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sub Department Name</th>
                    <th>Department Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($subdepartments->count() === 0)
                    <tr >
                        <td colspan="6">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($subdepartments as $subdepartment)
                <tr>
                    <td>
                        {{ $subdepartment->id }}
                    </td>
                    <td>
                        {{ $subdepartment->name }}
                    </td>
                    <td>
                        {{ $subdepartment->department->name }}
                    </td>
                    <td>
                        {{ $subdepartment->created_at }}
                    </td>
                    <td>
                        {{ $subdepartment->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('subdepartment_delete', $subdepartment->id) }}">
                            DELETE
                        </a> <br/>

                        <a href="{{ route('subdepartment_edit', $subdepartment->id) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection