<html>
    <head>
        <title>City List</title>
    </head>
    <body>
        <h1>City List</h1>
        <a href="{{ route('city_create') }}">Create City</a>
        @if (Session::has('success'))
            <p>
                {{ Session::get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>City Name</th>  
                    <th>Country Name</th>
                    <th>State Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($cities->count() === 0)
                    <tr>
                        <td colspan="7">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($cities as $city)
                <tr>
                    <td>
                        {{ $city->id }}
                    </td>
                    <td>
                        {{ $city->name }}
                    </td>
                    <td>
                        {{ $city->country_id }}
                    </td>
                    <td>
                        {{ $city->state_id }}
                    </td>
                    <td>
                        {{ $city->created_at }}
                    </td>
                    <td>
                        {{ $city->updated_at }}
                    </td>
                    <td>
                        <a href="#">
                            DELETE
                        </a> <br/>

                        <a href="#">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
