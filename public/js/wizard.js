$(document).ready(function(){

    $('#datetimepicker4').datetimepicker();

$("#terms_and_condition_checkout_wizard").on('ifUnchecked', function(event) {

    //Uncheck all checkboxes

    $('.checkout_from_wizard').attr('disabled','disabled');
});
//When checking the checkbox
$("#terms_and_condition_checkout_wizard").on('ifChecked', function(event) {
    //Check all checkoxes
    $('.checkout_from_wizard').removeAttr('disabled');
});

// Step show event
$("#w_smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition ) {
    //alert("You are on step "+stepNumber+" now");

    if(stepPosition === 'first'){
        $("#prev-btn").addClass('disabled');
        $('.checkout_from_wizard').hide();
    }else if(stepPosition === 'final'){

        var w_number_guests = $('#w_number_guests').val();
        var w_delivery_address = $('#w_delivery_address').val();
        var w_delivery_date = $('#w_delivery_date').val();


       /* if(w_number_guests != '' && w_delivery_address != '' && w_delivery_date != '' ){*/

            $("#next-btn").addClass('disabled');
            getWizardSummary(user_id);
            getWizardUserinformation(user_id);
            $('.checkout_from_wizard').show();
       /* }else{
            $('#w_smartwizard').smartWizard("prev");
            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-bottom-center';
            toastr.options.showDuration = 1000;
            toastr['warning']('All field are required!');

        }*/
    }else{

        $('.checkout_from_wizard').hide();
        $("#prev-btn").removeClass('disabled');
        $("#next-btn").removeClass('disabled');
    }
});

// Toolbar extra buttons
var product     =  $('<button></button>').text('Product').addClass('btn btn-warning pull-left').attr('id','wizard_back').on('click', function(){  $('#wizard_back').hide();
    $('.w_section_product>button').show();
    $('.w_section_product>.table').hide(); });
var btnFinish = $('<button type="button" class="btn btn-success checkout_from_wizard" disabled value="'+user_id+'">Checkout</button>');
var btnCancel = $(' <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel </button>');
$('#wizard_back').hide();

// Smart Wizard
$('#w_smartwizard').smartWizard({
    selected: 0,
    theme:  'default',
    transitionEffect:'fade',
    showStepURLhash: true,
    lang: {  // Language variables
        next: 'Next',
        previous: 'Back'
    },
    toolbarSettings: {toolbarPosition: 'bottom',
        toolbarExtraButtons: [product,btnFinish, btnCancel]
    }
});
    $('#wizard_back').hide();

$("#prev-btn").on("click", function() {
    // Navigate previous
    $('#w_smartwizard').smartWizard("prev");
    return true;
});

$("#next-btn").on("click", function() {
    // Navigate next
    $('#w_smartwizard').smartWizard("next");
    return true;
});

$(".sw-next-btn").hide();
$(".sw-prev-btn").hide();
$('.checkout').hide();


    $('.checkout_from_wizard').on('click',function(){
        var number_guests = $('#w_number_guests').val();
        var delivery_address = $('#w_delivery_address').val();
        var delivery_date = $('#w_delivery_date').val();
        var confirmation_number = $('#w_confirmation_number').val();
        var payment_type = $('input[name=w_payment_type]:checked').val();
        var establishment = $('#w_establishment_id').val();
        var id = $(this).val();
        var organize_from = 3;
        var reseturl = "/establishment/list#step-1";

        $.ajax({
            url: urlCheckOutFromWizard+"/"+id,
            type: "POST",
            data: {id: id,establishment:establishment,number_guests:number_guests,delivery_address:delivery_address,delivery_date:delivery_date,confirmation_number:confirmation_number,payment_type:payment_type,organize_from:organize_from, _token: token},
            dataType: "json",
            success: function (data) {
                if(data){

                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-bottom-center';
                    toastr.options.showDuration = 1000;
                    toastr['success']('Your Order has been processed,just wait for confirmation!');

                    $('#w_smartwizard').on("beginReset", function(e) {
                        return true;
                    });
                    $('#wizard-setup').modal('toggle');
                    $('#item_summary_wizard>tbody').empty();
                    $('#w_number_guests').val("");
                    $('#w_delivery_address').val("");
                    $('#w_delivery_date').val("");
                    $('#w_confirmation_number').val("");
                    $('#w_establishment_id').val("");
                    $('#w_di_name').text('');
                    $('#w_di_contact').text('');
                    $('#w_di_address').text('');
                    $('#w_di_date').text('');
                    $('#w_no_guests').text(0);
                    $('#wizard_total_cart_quantity').text(0);
                    $('#wizard_total_cart_amount').text(0);
                    window.location.replace(reseturl);
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });


});

function wizard_show_product_list(id){
    $('#wizard_back').show();
    $('.wizard_product_type_list'+id).css('display','block');
    $('.w_section_product>button').hide();
}


function add_to_wizard_cart(id,item_type){
    var quantity;

    if(item_type == 2) {
       quantity = $('#w_serviceQuantity' + id).val();
    }else {
       quantity = $('#w_packageQuantity' + id).val();
    }
    var total = $('#w_totalAmount').val();
    var total_quantity = $('#w_totalQuantity').val();

    if(quantity > 0){
        $.ajax({
            url: urlGetWizardProductDetails + "/" + id,
            type: "POST",
            data: {id: id,quantity:quantity,item_type:item_type, _token: token},
            dataType: "json",
            success: function(data){

                $('#w_productQuantity'+id).val("");
                $('#w_totalAmount').val((parseInt(quantity) * parseInt(data.product.price)) + parseInt(total));
                $('#w_totalQuantity').val(parseInt(quantity) + parseInt(total_quantity));
                $('.wizard-total-display').html(parseInt(quantity) + parseInt(total_quantity));
                $('#w_totalAmountDisplay').html($.number((parseInt(quantity) * parseInt(data.product.price)) + parseInt(total),2));

                if(data.exist == 0){
                    $('#wizard_cart').prepend("<tr id='wizard_item"+data.cart.id+"'><td><img src=" + myurl + "/storage/" + data.image + " alt='' style='max-width:100px;' height='20px' width='20px'/></td><td>"+data.product.name+"</td><td>"+ $.number(data.product.price,2)+"</td><td>"+ $.number(quantity)+"</td><td><button class='btn btn-danger ' onclick='wizard_deleteItem("+data.cart.id+","+item_type+")' style='font-size:10px;padding:5px 10px;'><span class='fa fa-trash'></span></button></td></tr>");
                }else{
                    $('tr#wizard_item'+data.cart.id+' td:nth-last-child(2)').text(data.cart.quantity);
                }
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-bottom-center';
                toastr.options.showDuration = 1000;
                toastr['success'](data.product.name+' successfully added to cart!');
            },
            error: function(data){
                console.log(data);
            }
        });
    }else{
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-center';
        toastr.options.showDuration = 1000;
        toastr['info']('Quantity should not be zero!');

    }


}


function wizard_deleteItem(id,item_type){

    var total = $('#w_totalAmount').val();
    var total_quantity = $('#w_totalQuantity').val();

    $.ajax({
        url: urldeleteWizardCartItem+"/"+id,
        type: "POST",
        data: {id: id,item_type:item_type, _token: token},
        dataType: "json",
        success : function(data){
            $('tr#wizard_item'+id).remove();

            $('.wizard-total-display').html(parseInt(total_quantity) - data.quantity);
            $('#w_totalAmountDisplay').html($.number(parseInt(total) - data.amount,2));
            $('#w_totalAmount').val(parseInt(total) - data.amount);
            $('#w_totalQuantity').val(parseInt(total_quantity) - data.quantity);


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

function getWizardSummary(id){

    /*<img src=" + myurl + "/storage/" + data.cart[i].image + "  style='max-width:100px;' height='20px' width='20px'/>*/

    $.ajax({
        url: urlgetCartWizardSummary+"/"+id,
        type: "POST",
        data: {id: id, _token: token},
        dataType: "json",
        success: function (data) {

            $('#item_summary_wizard_body').empty();
            for(var i=0;i<=data.cart.length-1;i++){
                $('#item_summary_wizard').append("<tr><td></td><td>"+data.cart[i].name+"</td><td>"+data.cart[i].price+"</td><td>"+data.cart[i].quantity+"</td></tr>")
            }
        },
        error: function (data) {
            console.log(data.cart);
        }
    });

}

function getWizardUserinformation(id){
    var number_guests = $('#w_number_guests').val();
    var delivery_address = $('#w_delivery_address').val();
    var delivery_date = $('#w_delivery_date').val();
    var payment_type = $('input[name=w_payment_type]:checked').val();
    var organize_from = 3;

    $.ajax({
        url: urlgetWizardUserinformation+"/"+id,
        type: "POST",
        data: {id: id,delivery_address:delivery_address,delivery_date:delivery_date,payment_type:payment_type,number_guests:number_guests,organize_from:organize_from, _token: token},
        dataType: "json",
        success: function (data) {
            console.log(data.cart);
            $('#w_di_name').text(data.user.name);
            $('#w_di_contact').text(data.request.confirmation_number);
            $('#w_di_address').text(data.request.delivery_address);
            $('#w_di_date').text(data.delivery_date);
            $('#w_pm_payment_method').text(data.payment_type);
            $('#w_no_guests').text(data.request.number_guests);
            $('#wizard_total_cart_quantity').text(data.total_quantity);
            $('#wizard_total_cart_amount').text(data.total_amount);
        },
        error: function (data) {
            console.log(data);
        }
    });
}