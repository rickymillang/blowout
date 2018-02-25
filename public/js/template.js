$(document).ready(function() {

    $("#smartwizard_template").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
        } else if (stepPosition === 'final') {


            $("#next-btn").addClass('disabled');


        } else {


            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
        }


    });


    var btnFinish = $('<button type="button" class="btn btn-success checkout_from_scratch" disabled value="">Checkout</button>');
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


});