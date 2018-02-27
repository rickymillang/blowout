$(document).ready(function() {

    $("#smartwizard_template").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
            $('.checkout_from_template').hide();

        } else if (stepPosition === 'final') {


            var template_number_guests = $('#template_number_guests').val();
            var template_delivery_address = $('#template_delivery_address').val();
            var template_delivery_date = $('#template_delivery_date').val();


            if(template_number_guests != '' && template_delivery_address != '' && template_delivery_date != '' ){
                $("#next-btn").addClass('disabled');
                getTemplateSummary(user_id);
                getTemplateUserinformation(user_id);
                $('.checkout_from_template').show();
            }else{
                $('#smartwizard_template').smartWizard("prev");
                $('.checkout_from_template').hide();
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-bottom-center';
                toastr.options.showDuration = 1000;
                toastr['warning']('All field are required!');

            }


        } else {


            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
        }


    });


    var btnFinish = $('<button type="button" class="btn btn-success checkout_from_template" disabled value="'+user_id+'">Checkout</button>');
    var btnCancel = $(' <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel </button>');


    $('#smartwizard_template').smartWizard({
        selected: 0,
        theme:  'arrows',
        transitionEffect:'fade',
        showStepURLhash: true,
        toolbarSettings: {toolbarPosition: 'bottom',
            toolbarExtraButtons: [btnFinish, btnCancel]
        }
    });


    $("#prev-btn").on("click", function () {
        // Navigate previous
        $('#smartwizard_template').smartWizard("prev");
        return true;
    });

    $("#next-btn").on("click", function () {
        // Navigate next
        $('#smartwizard_template').smartWizard("next");
        return true;
    });


    $(".sw-next-btn").hide();
    $(".sw-prev-btn").hide();


    $("#terms_and_condition_checkout_template").on('ifUnchecked', function(event) {

        //Uncheck all checkboxes

        $('.checkout_from_template').attr('disabled','disabled');
    });
    //When checking the checkbox
    $("#terms_and_condition_checkout_template").on('ifChecked', function(event) {
        //Check all checkoxes
        $('.checkout_from_template').removeAttr('disabled');
    });

    $('.checkout_from_template').on('click',function(){
        var template_number_guests = $('#template_template_number_guests').val();
        var template_delivery_address = $('#template_delivery_address').val();
        var template_delivery_date = $('#template_delivery_date').val();
        var template_payment_type = $('input[name=template_payment_type]:checked').val();
        var id = $(this).val();
        var organize_from = 1;
alert(template_delivery_date);
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-center';
        toastr.options.showDuration = 1000;

        $.ajax({
            url: urlCheckOutFromTemplate+"/"+id,
            type: "POST",
            data: {id: id,template_number_guests:template_number_guests,template_delivery_address:template_delivery_address,template_delivery_date:template_delivery_date,template_payment_type:template_payment_type,organize_from:organize_from, _token: token},
            dataType: "json",
            success: function (data) {
                if(data){

                    toastr['success']('Your Order has been processed,just wait for confirmation!');

                    $('#scratch-setup').modal('toggle');
                }
                else{
                    toastr['warning']('Fail to processed order!');
                    console.log(data);
                }
            },
            error: function (data) {
                toastr['warning']('Fail to processed order!');
                console.log(data);
            }
        });
    });
});



function getTemplateSummary(id){


    $.ajax({
        url: urlgetCartTemplateSummary+"/"+id,
        type: "POST",
        data: {id: id, _token: token},
        dataType: "json",
        success: function (data) {
            console.log(data.cart);

            $('#item_summary_template_body').empty();
            for(var i=0;i<=data.cart.length-1;i++){
                $('#item_summary_template').append("<tr><td><img src=" + myurl + "/storage/" + data.cart[i].image + "  style='max-width:100px;' height='20px' width='20px'/></td><td>"+data.cart[i].name+"</td><td>"+data.cart[i].price+"</td><td>"+data.cart[i].quantity+"</td></tr>")
            }
        },
        error: function (data) {
        }
    });

}

function getTemplateUserinformation(id){
    var template_number_guests = $('#template_number_guests').val();
    var template_delivery_address = $('#template_delivery_address').val();
    var template_delivery_date = $('#template_delivery_date').val();
    var template_payment_type = $('input[name=template_payment_type]:checked').val();
    var organize_from = 1;
    $.ajax({
        url: urlgetTemplateUserinformation+"/"+id,
        type: "POST",
        data: {id: id,template_delivery_address:template_delivery_address,template_delivery_date:template_delivery_date,template_payment_type:template_payment_type,template_number_guests:template_number_guests,organize_from:organize_from, _token: token},
        dataType: "json",
        success: function (data) {
            console.log(data.cart);
            $('#template_di_name').text(data.user.name);
            $('#template_di_contact').text(data.user.contact);
            $('#template_di_address').text(data.request.template_delivery_address);
            $('#template_di_date').text(data.delivery_date);
            $('#template_pm_payment_method').text(data.payment_type);
            $('#template_no_guests').text(data.request.template_number_guests);
            $('#template_total_cart_quantity').text(data.total_quantity);
            $('#template_total_cart_amount').text(data.total_amount);
        },
        error: function (data) {
            console.log(data);
        }
    });
}