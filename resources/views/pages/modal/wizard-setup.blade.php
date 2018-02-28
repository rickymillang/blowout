<!--Start of model div -->
                <div id="wizard-setup" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title-setup" style="color:white">Organize from wizard</h4>
                      </div>
                      <div class="modal-body" id="w_smartwizard">
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

                                         <div class="col-md-8 w_section_product">



                                         </div>
                                         <div class="col-md-4" >

                                                   <button class="btn btn-success btn-block"><span class="fa fa-shopping-cart pull-left"></span> Your Wizard Cart Item  <span class="scratc-notify-bubble wizard-total-display">{{ $cart_wizard_total_quantity }}</span></button>
                                                     <input type="hidden" id="w_totalQuantity" value="{{ $cart_wizard_total_quantity }}"/>
                                                    <div class="table">
                                                        <table class="table table-striped" id="wizard_cart">
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
                                                               <tbody id="wizard_item_cart">
                                                                 @foreach($cart_wizard as $cw)
                                                                    <tr id="wizard_item{{ $cw->id }}">
                                                                        <td><img src="{{ $cw->item_type == 1? asset("storage/".$cw->getItem->image) : asset("storage/".$cw->getItem->getEstablishment['image']) }}"style="max-width:100px;" height="35px" width="35px"></td>
                                                                        <td>{{ $cw->getItem->name}} </td>
                                                                        <td>{{ number_format($cw->getItem->price,2) }}</td>
                                                                        <td>{{ $cw->quantity }}</td>
                                                                        <td><button class='btn btn-danger' onclick='wizard_deleteItem({{ $cw->id }})' style='font-size:10px;padding:5px 10px;'><span class='fa fa-trash'></span></button></td>
                                                                    </tr>
                                                                 @endforeach
                                                             </tbody>
                                                             @endif
                                                         </table>
                                                    </div>
                                                    <span class="pull-right">Total: <span id="w_totalAmountDisplay" >{{ number_format(array_sum($total_amount_wizard),2) }}</span></span>
                                                    <input type="hidden" value="{{ array_sum($total_amount_wizard) }}" id="w_totalAmount"/>

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
                                            <input type="number" class="form-control" name="w_number_guests" id="w_number_guests"/>
                                         </div>
                                         <div class="form-group">
                                             <label for="inf-name" style="color:#808080">Confirmation Number</label>
                                             <input type="text" class="form-control" name="w_confirmation_number" id="w_confirmation_number"/>
                                          </div>
                                         <div class="form-group">
                                            <label for="inf-name" style="color:#808080">Delivery Address</label>
                                            <input type="text" class="form-control" name="w_delivery_address" id="w_delivery_address"/>
                                         </div>

                                              <label for="inf-name" style="color:#808080">Delivery Date</label>
                                            <div class='input-group date' id='datetimepicker4' style="position:relative;">

                                               <input type='text' class="form-control" id="w_delivery_date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                             </div>
                                       </div>

                                       <div class="col-md-6">
                                       <h4>Payment Method</h4>
                                       <div class="form-group">
                                           <input type="radio" name="w_payment_type" value="1" id="w_payment_type" checked="checked"  class="form-control"/>
                                          <img src="{{ asset('images/cod.png') }}" alt="Cash on Delivery" width="30%" style="margin-left: 5px;" height="20%"/>
                                       </div>
                                        <div class="form-group">
                                          <input type="radio" name="w_payment_type" value="2" id="w_payment_type" class="form-control"/>
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
                                                    <td id="w_di_name"></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact No.  </td>
                                                    <td width="20%" align="center">:</td>
                                                    <td id="w_di_contact"></td>
                                                 </tr>
                                                  <tr>
                                                      <td>No. of Quests</td>
                                                      <td width="20%" align="center">:</td>
                                                      <td id="w_no_guests"></td>
                                                   </tr>
                                                 <tr>
                                                     <td>Delivery Address</td>
                                                     <td width="20%" align="center">:</td>
                                                     <td id="w_di_address"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Delivery Date</td>
                                                      <td width="20%" align="center">:</td>
                                                      <td id="w_di_date"></td>
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
                                               <td id="w_pm_payment_method"></td>
                                           </tr>
                                           </table>


                                         </div>
                                         <div class="col-md-7">

                                                <h4>Product Item</h4>
                                                <hr/>
                                                <div class="table">
                                                <table class="table collapsed" id="item_summary_wizard">
                                                   <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="item_summary_wizard_body">

                                                    </tbody>
                                                </table>

                                                <table>
                                                    <tr>
                                                        <td style="color:#5cb85c">Total Item Quantity</td>
                                                        <td width="20%" align="center">:</td>
                                                        <td id="wizard_total_cart_quantity" align="right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#5cb85c">Total Amount</td>
                                                        <td width="20%" align="center">:</td>
                                                        <td id="wizard_total_cart_amount" align="right">0.00</td>
                                                    </tr>
                                                </table>
                                                </div>
                                                <hr/>
                                                <div class="col-md-12">
                                                <div class="pull-right">
                                                    <input type="checkbox" class="form-control" id="terms_and_condition_checkout_wizard"/>
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