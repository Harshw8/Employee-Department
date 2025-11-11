<html>
    <head>
        <title>Project Create</title>
    </head>
    <body>
        <h1>Project Create</h1>
        <form action="{{ route('project_store') }}" method="post">
            @csrf
            @include('Backend.project_form_inputs')
        </form>
    </body>
</html>