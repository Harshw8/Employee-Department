<html>
    <head>
        <title>State Create</title>
    </head>
    <body>
        <h1>State Create</h1>
        <a href="{{ route('state_list') }}">
            <- BACK
        </a>
        <form action="{{ route('state_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.state_form_inputs')
        </form>
        
    </body>
</html> 