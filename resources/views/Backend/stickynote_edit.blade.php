<html>
    <head>
        <title>Sticky Note Edit</title>
    </head>
    <body>
        <h1>Sticky Note Edit</h1>
        <a href="{{ route('stickynote_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('stickynote_update',['id'=>$stickyNote->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf     
            @include('Backend.stickynote_form_input')

        </form>
    </body>
</html>