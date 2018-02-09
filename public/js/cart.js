
  /*  $('#addtocart').on('click',function(e){
        e.preventDefault();
        alert('wew');
    });*/

    $('.itemCart').on('click',function(){
       var cartVal = $('.cartItemTotal').val();

        if(cartVal == 0){
            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-bottom-center';
            toastr.options.showDuration = 1000;
            toastr['info']('Your cart is empty!');
        }
    });

  $('#clearCart').on('click',function(e){
      e.preventDefault();

      var cnfrm = confirm('Are your sure you want to remove all item from your cart?');

      if(cnfrm) {
          $('#deleteForm').submit();
      }
  });

  function deleteItem(id){
    var cartItemTotal = 0;
      var cartTotal = 0;

      cartItemTotal = parseInt($('.cartItemTotal').val());
      $.ajax({
          url: urldeleteCartItem+"/"+id,
          type: "DELETE",
          data: {id: id, _token: token},
          dataType: "json",
          success : function(data){
              $('#item'+id).remove();

              cartTotal = cartItemTotal - 1;

              $('.cartItemTotalBubble').text(cartTotal);
              $('.cartItemTotal').val(cartTotal);

              if(cartTotal == 0){
                  $('#cart').modal('toggle');
                  $('.itemCart').removeAttr('data-toggle');

                  $('.itemCart').removeAttr('data-target');
              }
              console.log(data);
          },
          error : function(data){

          }
      });
  }
    function trappings(){
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-center';
        toastr.options.showDuration = 1000;
        toastr['info']('You must login first!');
    }
    function addCart(id,item_type){

        var quantity = $('#quantity'+id).val();

        if(quantity > 0 || item_type != 1) {
            $.ajax({
                url: urlAddCart,
                type: "POST",
                data: {id: id, item_type: item_type, quantity: quantity, _token: token},
                dataType: "json",
                success: function (data) {
                    console.log(data.cart.quantity);
                    var totalCartItem = $('.cartItemTotal').val();
                    var new_total_amount = parseInt($('.totalAmount').val()) + parseInt(data.add_amount);
                    $('#prod'+id).modal('toggle');

                    $('.totalAmountDisplay').html('Php '+new_total_amount);
                    $('.totalAmount').val(parseInt($('.totalAmount').val()) + parseInt(data.add_amount));

                    if(totalCartItem == 0){
                        $('.itemCart').attr("data-toggle","modal");
                        $('.itemCart').attr("data-target","#cart");
                    }

                    if(data.exist == 0) {
                        $('.cartItemTotalBubble').text(parseInt($('.cartItemTotal').val())+1);
                        $('.cartItemTotal').val(parseInt($('.cartItemTotal').val())+1);
                        $('#table_cart').append("<tr><td><img src=" + myurl + "/storage/" + data.image + " alt='' style='max-width:100px;' height='35px' width='35px'/></td><td>" + data.name + "</td><td>" + data.price + "</td><td>" + data.cart.quantity + "</td><td><button onclick='deleteItem("+data.cart.id+")' class='btn btn-danger' style='font-size:10px;padding:5px 10px;' id='" + data.cart.id + "'><span class='fa fa-trash'></span></button</td></tr>");
                    }else{
                        $('tr#item'+data.cart.id+' td:nth-last-child(2)').text(data.cart.quantity);

                    }
                        toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-bottom-center';
                    toastr.options.showDuration = 1000;
                    toastr['success']('Items has been added to cart!');
                },
                error: function (data) {
                    console.log(data);
                    toastr['warning']('Fail to add item to cart!');
                }
            });
        }else{
            alert('Please input quantity!');
        }
    }
