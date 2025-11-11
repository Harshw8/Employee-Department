<html>
    <head>
        <title>Currency List</title>
    </head>
    <body>
        <h1>Currency List</h1>
        <a href="{{ route('currency_create') }}">
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
                    <th>Country</th>
                    <th>Currency Name</th>
                    <th>Currency Symbol</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($currencies->count() === 0)
                    <tr>
                        <td colspan="7">No Records found</td>
                    </tr>
                @endif
                @foreach($currencies as $currency)
                <tr>
                    <td>
                        {{ $currency->id }}
                    </td>
                    <td>
                        {{ $currency->country }}
                    </td>
                    <td>
                        {{ $currency->currency_name }}
                    </td>
                    <td>
                        {{ $currency->currency_symbol }}
                    </td>
                    <td>
                        {{ $currency->created_at }}
                    </td>
                    <td>
                        {{ $currency->updated_at }}
                    </td>
                    <td>
                        <a href="{{ route('currency_delete', $currency->id) }}">
                            Delete
                        </a><br/>
                        
                        <a href="{{ route('currency_edit', $currency->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>