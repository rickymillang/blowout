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

$('#scratch_back').on('click',function(){
    $(this).hide();
    $('.section_product>button').show();
    $('.section_product>.table').hide();
});

function add_to_cart(id){
    var quantity = $('#s_productQuantity'+id).val();
    var total = $('#s_totalAmount').val();


    if(quantity > 0){
        $.ajax({
            url: urlGetProductDetails + "/" + id,
            type: "POST",
            data: {id: id, _token: token},
            dataType: "json",
            success: function(data){
                console.log(data);
                $('#scratch_cart').prepend("<tr><td><img src=" + myurl + "/storage/" + data.image + " alt='' style='max-width:100px;' height='20px' width='20px'/></td><td>"+data.name+"</td><td>"+quantity+"</td><td></td></tr>");
                $('#s_productQuantity'+id).val("");
                $('#s_totalAmount').val(quantity + total);
                $('#s_totalAmountDisplay').html(quantity + total);
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-bottom-center';
                toastr.options.showDuration = 1000;
                toastr['success'](data.name+' successfully added to cart!');
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