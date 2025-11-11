<html>
    <head>
        <title>Department Edit</title>
    </head>
    <body>
        <h1>Department Edit</h1>
        <a href="{{ route('department_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('department_update',['id'=>$department->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.department_form_inputs')
        </form>
    </body>
</html>