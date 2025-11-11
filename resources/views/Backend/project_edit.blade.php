<html>
    <head>
        <title>Project Edit</title>
    </head>
    <body>
        <h1>Project Edit</h1>
        <form action="{{ route('project_update', $project->id) }}" method="post">
            @csrf
            @include('Backend.project_form_inputs')
        </form>
    </body>
</html>