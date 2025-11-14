<html>
    <head>
        <title>City Create</title>
    </head>
    <body>
        <h1>City Create</h1>
        <a href="{{ route('city_list') }}">
            <- BACK
        </a>
        <form action="{{ route('city_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label>Country</label>
                <select id="country_id" name="country_id" class="country_class">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>State</label>
                <select id="state_id" name="state_id">
                    <option value="">Select State</option>
                    
                </select>
            </div>
            
            <button type="submit">Submit</button>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_STATE = "{{ route('state_fetchDropDownState', ['country_id' => ':id']) }}"
            $("#country_id").on('change', function() {
                var country_id = $(this).val();

                $.ajax({
                    url: ROUTE_FETCH_STATE.replace(':id', country_id),
                    type: "GET",
                    success : function (response){
                        $("#state_id").html(response.html);
                    },
                    error : function (error){
                        console.log(error);
                    }
                });
            }); 
        </script>
    </body>
</html>  