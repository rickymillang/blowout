
    function getSummary(id){


        $.ajax({
            url: urlgetCartScratchSummary+"/"+id,
            type: "POST",
            data: {id: id, _token: token},
            dataType: "json",
            success: function (data) {
               console.log(data.cart);

                $('#item_summary_scratch_body').empty();
               for(var i=0;i<=data.cart.length-1;i++){
                   $('#item_summary_scratch').append("<tr><td><img src=" + myurl + "/storage/" + data.cart[i].image + "  style='max-width:100px;' height='20px' width='20px'/></td><td>"+data.cart[i].name+"</td><td>"+data.cart[i].price+"</td><td>"+data.cart[i].quantity+"</td></tr>")
               }
            },
            error: function (data) {
            }
        });

    }

    function getUserinformation(id){
        var number_guests = $('#number_guests').val();
        var delivery_address = $('#delivery_address').val();
        var delivery_date = $('#delivery_date').val();
        var payment_type = $('input[name=payment_type]:checked').val();
        var organize_from = 2;

        $.ajax({
            url: urlgetUserinformation+"/"+id,
            type: "POST",
            data: {id: id,delivery_address:delivery_address,delivery_date:delivery_date,payment_type:payment_type,number_guests:number_guests,organize_from:organize_from, _token: token},
            dataType: "json",
            success: function (data) {
                console.log(data.cart);
                $('#di_name').text(data.user.name);
                $('#di_contact').text(data.user.contact);
                $('#di_address').text(data.request.delivery_address);
                $('#di_date').text(data.delivery_date);
                $('#pm_payment_method').text(data.payment_type);
                $('#no_guests').text(data.request.number_guests);
                $('#scratch_total_cart_quantity').text(data.total_quantity);
                $('#scratch_total_cart_amount').text(data.total_amount);
            },
            error: function (data) {
            }
        });
    }

