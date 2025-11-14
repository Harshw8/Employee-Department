<html>
    <head>
        <title>Country Create</title>
    </head>
    <body>
        <h1>Country Create</h1>
        <a href="{{ route('country_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('country_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.country_form_inputs')
        </form>
    </body>
</html>