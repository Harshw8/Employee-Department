<html>
    <head>
        <title>Leave Create</title>
    </head>
    <body>
        <h1>Leave Create</h1>
        <a href="{{ route('leave_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('leave_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.leave_form_inputs')
        </form>
    </body>
</html>