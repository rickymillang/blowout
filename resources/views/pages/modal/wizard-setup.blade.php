<!--Start of model div -->
                <div id="wizard-setup" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg" >

                    <!-- Modal content-->
                    <div class="modal-content" >
                      {{--<div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title-setup" style="color:white">Organize from wizard</h4>
                      </div>--}}
                      <div class="modal-body" id="w_smartwizard">
                      {{--<h4 class="modal-title" style="color: rgba(40, 40, 40, 0.63)">Choose what you want and need!</h4>--}}

                         <ul>
                             <li><a href="#step-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                             <li><a href="#step-7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            {{-- <li><a href="#step-8">Step 8&nbsp;&nbsp;&nbsp;&nbsp;</a></li>--}}      {{-- <li><a href="#step-7">Step 7</a></li>
                                 <li><a href="#step-8">Step 8</a></li>--}}
                         </ul>
                            <div style="height:auto;">
                        <br/>
                                 <div id="step-1" class="steps">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="question-wizard">
                                              <h3 style="text-align:center;color:rgba(108,108,108,0.39)">What type of event are you planning?</h3>
                                            </div>

                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-md-1"></div>
                                         <div class="col-md-10 " id="question-box" >
                                              <div id="event-display">

                                              </div>
                                             <br>
                                             <br>
                                         </div>

                                         <div class="col-md-1"></div>
                                     </div>
                                 </div>
                                 
                                 <div id="step-2" class="steps">
                                     <div class="row">
                                     <div class="question-wizard">
                                         <h3 style="text-align:center;color:rgba(108,108,108,0.39)">How many possible guest?</h3>
                                     </div>
                                     </div>

                                       <div class="row">

                                         <div class="col-md-1"></div>
                                         <div class="col-md-10" id="question-box">
                                                   <div class="form-group">
                                                       <input type="number" id="w_number_guests" class="form-control" Placeholder="Enter number of possible guest">
                                                   </div>
                                           </div>
                                         <div class="col-md-1"></div>
                                      </div>
                                 </div>
                                 <div id="step-3" class="steps">
                                     <div class="question-wizard">
                                         <h3 style="text-align:center;color:rgba(56,56,56,0.52)">Choose your venue</h3>
                                     </div>
                                      <div class="row">

                                           <div class="col-md-1"></div>
                                           <div class="col-md-10" >

                                               <div class="row">
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                            <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                              <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>

                                               </div>

                                               <br><br>


                                               <div class="row">
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>

                                               </div>

                                               <br><br>


                                               <div class="row">
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="venue">
                                                           <img src="{{ asset('storage/images/grandcon.jpg') }}" alt="" width="100%" height="100%">
                                                           <br>
                                                           <div class="venue-details">
                                                               <div class="venue-name">Grand Convention Cebu</div>
                                                               <div class="venue-address">Address : Tisa Cebu City</div>
                                                               <div class="venue-guest-number">Guest capacity : 200</div>
                                                               <div class="venue-price">Price : 2,000</div>

                                                           </div>
                                                       </div>
                                                   </div>

                                               </div>

                                               <br><br>
                                           </div>
                                           <div class="col-md-1"></div>
                                        </div>
                                 </div>
                                <div id="step-4" class="steps">
                                    <div class="question-wizard">
                                        <h3 style="text-align:center;color:rgba(56,56,56,0.52)">What party planning services would you like?</h3>
                                    </div>
                                    <div class="row">

                                      <div class="col-md-1"></div>
                                      <div class="col-md-10" id="question-box">
                                        <div id="inputcontainer">
                                                           <input type="checkbox" name="question1" class="form-control">
                                                       <label for="">Setup</label>
                                                  </div>



                                                   <div id="inputcontainer">
                                                      <input type="checkbox" name="question1" class="form-control">
                                                        <label for="">Clean Up</label>
                                                   </div>



                                                  <div id="inputcontainer">
                                                     <input type="checkbox" name="question1" class="form-control">
                                                       <label for="">Day-of coordination</label>
                                                  </div>



                                                  <div id="inputcontainer" >
                                                      <input type="checkbox" name="question1" class="form-control">
                                                       <label for="">Decor Rental</label>
                                                  </div>


                                                  <div id="inputcontainer">
                                                     <input type="checkbox" name="question1" class="form-control">
                                                       <label for="">Floral services</label>
                                                  </div>

                                        </div>
                                      <div class="col-md-1"></div>
                                   </div>
                                </div>
                                <div id="step-5" class="steps">
                                    <div class="question-wizard">
                                        <h3 style="text-align:center;color:rgba(108,108,108,0.39)">How far away is your event?</h3>
                                    </div>
                                   <div class="row">

                                      <div class="col-md-1"></div>
                                      <div class="col-md-10" id="question-box">
                                        <div id="inputcontainer">

                                                     <input type="radio" name="question1" class="form-control">
                                                       <label for="">Less than one month</label>
                                                  </div>


                                                   <div id="inputcontainer">
                                                      <input type="radio" name="question1" class="form-control">
                                                        <label for="">1 - 2 months</label>
                                                   </div>


                                                  <div id="inputcontainer">
                                                     <input type="radio" name="question1" class="form-control">
                                                       <label for="">3 - 5 months</label>
                                                  </div>


                                                  <div id="inputcontainer">
                                                     <input type="radio" name="question1" class="form-control">
                                                       <label for="">6 - 8 months</label>
                                                  </div>

                                                  <div id="inputcontainer">
                                                     <input type="radio" name="question1" class="form-control">
                                                       <label for="">9 - 12 months</label>
                                                  </div>

                                        </div>
                                      <div class="col-md-1"></div>
                                   </div>
                                </div>
                                {{--<div id="step-7" class="steps">
                                    <div class="question-wizard">
                                        <h3 style="text-align:center;color:rgba(108,108,108,0.39)">What type of event are you planning?</h3>
                                    </div>
                                </div>--}}

                                   <div id="step-6" class="steps">
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
                                   <div id="step-7" class="steps">
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
                                           <div class="col-md-8">

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