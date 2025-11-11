<html>
    <head>
        <title>SubDepartment Edit</title>
    </head>
    <body>
        <h1>SubDepartment Edit</h1>
        <a href="{{ route('subdepartment_list') }}">
            <- BACK
        </a>
        <form action="{{ route('subdepartment_update', $subdepartment->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.subdepartment_form_inputs')
        </form>
        
    </body>
</html> 