<!--Start of model div -->
                <div id="scratch-setup" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title-setup" style="color:white">Organize from scratch</h4>
                      </div>
                      <div class="modal-body" id="smartwizard">
                      {{--<h4 class="modal-title" style="color: rgba(40, 40, 40, 0.63)">Choose what you want and need!</h4>--}}

                         <ul>
                             <li><a href="#step-1">Step 1<br /><small>Shopping</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small>Delivery Information</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small>Order Summary</small></a></li>

                         </ul>
                            <div>

                        <br/>
                                 <div id="step-1" class="steps">

                                       <div class="row">

                                         <div class="col-md-8 section_product">



                                         </div>
                                         <div class="col-md-4" >

                                                  <button class="btn btn-success btn-block"><span class="fa fa-shopping-cart pull-left"></span> Your Scratch Cart Item  <span class="scratc-notify-bubble scratch-total-display">{{ $cart_scratch_total_quantity }}</span></button>
                                                  <input type="hidden" id="s_totalQuantity" value="{{ $cart_scratch_total_quantity }}"/>
                                                 <div class="table">
                                                     <table class="table table-striped" id="scratch_cart">
                                                         <thead>
                                                                 <tr>
                                                                     <th></th>
                                                                     <th>Name</th>
                                                                     <th>Price</th>
                                                                     <th>#</th>
                                                                     <th></th>
                                                                 </tr>
                                                         </thead>
                                                           @if(auth()->check())
                                                         <tbody id="scratch_item_cart">

                                                                @foreach($cart_scratch as $cs)
                                                                <tr id="scratch_item{{ $cs->id }}">
                                                                    <td><img src="{{ $cs->item_type == 1? asset("storage/".$cs->getItem->image) : asset("storage/".$cs->getItem->getEstablishment['image']) }}"style="max-width:100px;" height="35px" width="35px"></td>
                                                                    <td>{{ $cs->getItem->name}} </td>
                                                                    <td>{{ number_format($cs->getItem->price,2) }}</td>
                                                                    <td>{{ $cs->quantity }}</td>
                                                                    <td><button class='btn btn-danger ' onclick='scratch_deleteItem({{ $cs->id }})' style='font-size:10px;padding:5px 10px;'><span class='fa fa-trash'></span></button></td>
                                                                </tr>
                                                                @endforeach
                                                         </tbody>
                                                         @endif
                                                     </table>

                                                 </div>
                                                 <span class="pull-right">Total: <span id="s_totalAmountDisplay" >{{ number_format(array_sum($total_amount_scratch),2) }}</span></span>
                                                 <input type="hidden" value="{{ array_sum($total_amount_scratch) }}" id="s_totalAmount"/>

                                          </div>


                                      {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-warning pull-left" id="scratch_back"><span class="fa fa-arrow-left"></span> Back</button>
                                         <button type="button" class="btn btn-success">Checkout</button>
                                         <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel </button>

                                       </div>--}}

                                   </div>
                                 </div>
                                 <div id="step-2" class="steps">
                                     <div class="row">
                                        <div class="col-md-6">
                                        <h4>Information Details</h4>

                                         <div class="form-group">
                                            <label for="inf-number-quests" style="color:#808080">Number of Guests</label>
                                            <input type="number" class="form-control" name="number_guests" id="number_guests"/>
                                         </div>
                                         <div class="form-group">
                                            <label for="inf-name" style="color:#808080">Confirmation Number</label>
                                            <input type="text" class="form-control" name="confirmation_number" id="confirmation_number"/>
                                         </div>
                                         <div class="form-group">
                                           <label for="inf-name" style="color:#808080">Delivery Address</label>
                                           <input type="text" class="form-control" name="delivery_address" id="delivery_address"/>
                                        </div>
                                              <label for="inf-name" style="color:#808080">Delivery Date</label>
                                            <div class='input-group date' id='datetimepicker1' style="position:relative;">

                                               <input type='text' class="form-control" id="delivery_date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                             </div>
                                       </div>

                                       <div class="col-md-6">
                                       <h4>Payment Method</h4>
                                       <div class="form-group">
                                           <input type="radio" name="payment_type" value="1" id="payment_type" checked="checked"  class="form-control"/>
                                          <img src="{{ asset('images/cod.png') }}" alt="Cash on Delivery" width="30%" style="margin-left: 5px;" height="20%"/>
                                       </div>
                                        <div class="form-group">
                                          <input type="radio" name="payment_type" value="2" id="payment_type" class="form-control"/>
                                          <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" style="margin-left: 5px;" alt="PayPal Logo">
                                      </div>
                                       </div>

                                     </div>

                                 </div>
                                 <div id="step-3" class="steps">
                                     <div class="row">
                                        <div class="col-md-5">
                                            <h4>Delivery Information</h4>

                                            <hr/>
                                            <table id="table_delivery_information">
                                                <tr>
                                                    <td>Name</td>
                                                    <td width="20%" align="center">:</td>
                                                    <td id="di_name"></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact No.  </td>
                                                    <td width="20%" align="center">:</td>
                                                    <td id="di_contact"></td>
                                                 </tr>
                                                  <tr>
                                                      <td>No. of Quests</td>
                                                      <td width="20%" align="center">:</td>
                                                      <td id="no_guests"></td>
                                                   </tr>
                                                 <tr>
                                                     <td>Delivery Address</td>
                                                     <td width="20%" align="center">:</td>
                                                     <td id="di_address"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Delivery Date</td>
                                                      <td width="20%" align="center">:</td>
                                                      <td id="di_date"></td>
                                                   </tr>
                                            </table>



                                           <br/>
                                           <br>
                                           <h4>Payment Method</h4>
                                           <hr/>

                                           <table id="table_payment_method">
                                           <tr>
                                               <td>Type</td>
                                               <td width="20%" align="center">:</td>
                                               <td id="pm_payment_method"></td>
                                           </tr>
                                           </table>


                                         </div>
                                         <div class="col-md-7">

                                                <h4>Product Item</h4>
                                                <hr/>
                                                <div class="table">
                                                <table class="table collapsed" id="item_summary_scratch">
                                                   <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="item_summary_scratch_body">

                                                    </tbody>
                                                </table>

                                                <table>
                                                    <tr>
                                                        <td style="color:#5cb85c">Total Item Quantity</td>
                                                        <td width="20%" align="center">:</td>
                                                        <td id="scratch_total_cart_quantity" align="right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#5cb85c">Total Amount</td>
                                                        <td width="20%" align="center">:</td>
                                                        <td id="scratch_total_cart_amount" align="right">0.00</td>
                                                    </tr>
                                                </table>
                                                </div>
                                                <hr/>
                                                <div class="col-md-12">
                                                <div class="pull-right">
                                                    <input type="checkbox" class="form-control" id="terms_and_condition_checkout_scratch"/>
                                                    <label for=""><a href="#">I hereby accept the term and conditions</a></label>
                                                </div>
                                                </div>
                                         </div>
                                     </div>
                                 </div>

                        </div>

                    </div>


                  </div>
                </div>
         </div>