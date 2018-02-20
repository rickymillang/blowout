$(document).ready(function(){
    $('#scratch_back').hide();
});

$('#setup').on('change',function(){
    var setup = $('#setup option:selected').val();

    if(setup == 2){
        $('#scratch').modal('toggle');
    }else if(setup == 3){
        $('#wizard').modal('toggle');
    }
});

function show_product_list(id){
    $('#scratch_back').show();
    $('.product_type_list'+id).css('display','block');
    $('.section_product>button').hide();
}

/*$('#scratch_back').on('click',function(){
    $(this).hide();
    $('.section_product>button').show();
    $('.section_product>.table').hide();
});*/

function add_to_cart(id){
    var quantity = $('#s_productQuantity'+id).val();
    var total = $('#s_totalAmount').val();
   var total_quantity = $('#s_totalQuantity').val();

    if(quantity > 0){
        $.ajax({
            url: urlGetProductDetails + "/" + id,
            type: "POST",
            data: {id: id,quantity:quantity, _token: token},
            dataType: "json",
            success: function(data){
                console.log(data);

                $('#s_productQuantity'+id).val("");
                $('#s_totalAmount').val((parseInt(quantity) * parseInt(data.product.price)) + parseInt(total));
                $('#s_totalQuantity').val(parseInt(quantity) + parseInt(total_quantity));
                $('.scratch-total-display').html(parseInt(quantity) + parseInt(total_quantity));
                $('#s_totalAmountDisplay').html($.number((parseInt(quantity) * parseInt(data.product.price)) + parseInt(total),2));

                if(data.exist == 0){
                    $('#scratch_cart').prepend("<tr id='scratch_item"+data.cart.id+"'><td><img src=" + myurl + "/storage/" + data.product.image + " alt='' style='max-width:100px;' height='20px' width='20px'/></td><td>"+data.product.name+"</td><td>"+ $.number(data.product.price,2)+"</td><td>"+ $.number(quantity)+"</td><td><button class='btn btn-danger ' onclick='scratch_deleteItem("+data.cart.id+")' style='font-size:10px;padding:5px 10px;'><span class='fa fa-trash'></span></button></td></tr>");
                }else{
                    $('tr#scratch_item'+data.cart.id+' td:nth-last-child(2)').text(data.cart.quantity);
                }
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-bottom-center';
                toastr.options.showDuration = 1000;
                toastr['success'](data.product.name+' successfully added to cart!');
            },
            error: function(data){

            }
        });
    }else{
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-center';
        toastr.options.showDuration = 1000;
        toastr['info']('Quantity should not be zero!');

    }


}


function scratch_deleteItem(id){

    var total = $('#s_totalAmount').val();
    var total_quantity = $('#s_totalQuantity').val();

    $.ajax({
        url: urldeleteCartItem+"/"+id,
        type: "DELETE",
        data: {id: id, _token: token},
        dataType: "json",
        success : function(data){
            $('tr#scratch_item'+id).remove();

            $('.scratch-total-display').html(parseInt(total_quantity) - data.quantity);
            $('#s_totalAmountDisplay').html($.number(parseInt(total) - data.amount,2));
            $('#s_totalAmount').val(parseInt(total) - data.amount);
            $('#s_totalQuantity').val(parseInt(total_quantity) - data.quantity);


            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-bottom-center';
            toastr.options.showDuration = 1000;
            toastr['success']('Item successfully removed!');
            console.log(data);
        },
        error : function(data){

        }
    });
}