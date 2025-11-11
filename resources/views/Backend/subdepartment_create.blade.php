<html>
    <head>
        <title>SubDepartment Create</title>
    </head>
    <body>
        <h1>SubDepartment Create</h1>
        <a href="{{ route('subdepartment_list') }}">
            <- BACK
        </a>
        <form action="{{ route('subdepartment_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.subdepartment_form_inputs')
        </form>
        
    </body>
</html> 