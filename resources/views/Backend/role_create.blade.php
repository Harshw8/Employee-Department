<html>
    <head>
        <title>Role Create</title>
    </head>
    <body>
        <h1>Role Create</h1>
        <a href="{{ route('role_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('role_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.role_form_inputs')

        </form>
    </body>
</html>