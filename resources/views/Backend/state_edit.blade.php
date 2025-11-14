<html>
    <head>
        <title>State Edit</title>
    </head>
    <body>
        <h1>State Edit</h1>
        <a href="{{ route('state_list') }}">
            <- BACK
        </a>
        <form action="{{ route('state_update', $state->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.state_form_inputs')
        </form>
        
    </body>
</html> 