<html>
    <head>
        <title>Announcement Create</title>  
    </head>
    <body>
        <h1>Announcement Create</h1>
        <a href="{{ route('announcement_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('announcement_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Backend.announcement_form_inputs')

        </form>
    </body>
</html>