<html>
    <head>
        <title>Employee Letter Create</title>
    </head>
    <body>
        <h1>Employee Letter Create</h1>
        <a href="{{ route('employeeletter_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('employeeletter_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.employeeletter_form_inputs')

        </form>
    </body>
</html>