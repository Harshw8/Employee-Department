<html>
    <head>
        <title>Announcement Edit</title>
    </head>
    <body>
        <h1>Announcement Edit</h1>
        <a href="{{ route('announcement_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('announcement_update',['id'=>$announcement->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf     
            @include('Backend.announcement_form_inputs')
        </form>
    </body>
</html>