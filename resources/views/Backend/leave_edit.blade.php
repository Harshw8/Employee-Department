<html>
    <head>
        <title>Leave Edit</title>
    </head>
    <body>
        <h1>Leave Edit</h1>
        <a href="{{ route('leave_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('leave_update',['id'=>$leave->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.leave_form_inputs')

        </form>
    </body>
</html>