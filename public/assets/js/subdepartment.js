$("#department_id").on('change', function() {
                var department_id = $(this).val();

                $.ajax({
                    url: ROUTE_FETCH_SUBDEPARTMENT.replace(':id', department_id),
                    type: "GET",
                    success : function (response){
                        $("#subdepartment_id").html(response.html);
                    },
                    error : function (error){
                        console.log(error);
                    }
                });
            }); 