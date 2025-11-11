<html>
    <head>
        <title>Edit Employee Letter</title>
    </head>
    <body>
        <h1>Edit Employee Letter</h1>
        <a href="{{ route('employeeletter_list') }}">
            <-BACK 
        </a>
        @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
        @endif
        <form action="{{ route('employeeletter_update', $employeeletter->id) }}" method="post">
            @csrf
            @include('backend.employeeletter_form_inputs')
        </form>
    </body>
</html>
    