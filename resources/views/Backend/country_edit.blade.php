<html>
    <head>
        <title>Country Edit</title>
    </head>
    <body>
        <h1>Country Edit</h1>
        <a href="{{ route('country_list') }}">
            <-BACK 
        </a>
        <form action="{{ route('country_update',['id'=>$country->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('Backend.country_form_inputs')

        </form>
    </body>
</html>