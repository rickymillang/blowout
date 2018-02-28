<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="{{ asset('images/blowout.png') }}" width="40%" height="40%" alt=""/> <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
					    <li><a href="/">Home</a></li>
						<li><a href="/establishment/list">Establishment</a></li>
						{{--<li class="has-dropdown">
							<a href="#">Travel</a>
							<ul class="dropdown">
								<li><a href="#">Europe</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Canada</a></li>
							</ul>
						</li>--}}
						<li><a href="/about-us">About Us</a></li>
						<li><a href="/meet-the-team">Meet The Team</a></li>
						<li><a href="/contact-us">Contact Us</a></li>
						@if(!auth()->check())
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Register</a></li>
						@endif
						<li class="notify-container"> <a href="javascript:void(0);" class="itemCart" @if($cart_template_total_quantity != 0) data-toggle="modal" data-target="#cart" @endif>
                                <input type="hidden" class="cartItemTotal" value="{{ $cart_template_total_quantity }}"/>
                                <span class="notify-bubble cartItemTotalBubble" >{{ $cart_template_total_quantity }}</span>
                                <span class="btn-notify fa fa-shopping-cart fa-lg"></span>

                          </a>

                          </li>
                         @if(auth()->check())
                        <li class="has-dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <img src="{{ asset(auth()->user()->avatar) }}" alt="" style="border-radius: 50%"  width="30px" height="30px"/> <span class="caret"></span>
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="/dashboard"> Dashboard</a>

                                    </li>
                                    <li>
                                        <a href="#"> Profile</a>

                                    </li>
                                    <li>
                                        <a href="/change_password"> Change Password</a>

                                    </li>
                                    @role('establishment.admin')
                                    <li>
                                        <a href="/establishment/edit">My Establishment</a>

                                    </li>
                                    @endrole
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif

					</ul>
				</div>

			</div>

		</div>
	</nav>

	        	<!-- Cart Modal -->
                    <div id="cart" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color:white"><span class="btn-notify fa fa-shopping-cart "></span> Cart</h4>
                          </div>
                          <div class="modal-body " id="smartwizard_template">

                           <ul>
                               <li><a href="#step-1">Step 1<br /><small>Shopping</small></a></li>
                               <li><a href="#step-2">Step 2<br /><small>Delivery Information</small></a></li>
                               <li><a href="#step-3">Step 3<br /><small>Order Summary</small></a></li>

                           </ul>
                           <br/>
                           <div>
                            <div id="step-1" class="steps" >
                                     <div class="table">
                                         <table class="table table-striped" id="table_cart">
                                              <thead>
                                                  <tr>
                                                      <th width="10%"></th>
                                                      <th>Item Name</th>
                                                      <th>Price</th>
                                                      <th>Quantity</th>
                                                      <th width="10%"></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                              @if(auth()->check())
                                                @foreach($cart_template as $c)
                                                    <tr id="item{{ $c->id }}">
                                                        <td><img src="{{ $c->item_type == 1? asset("storage/".$c->getItem->image) : asset("storage/".$c->getItem->getEstablishment['image']) }}"style="max-width:100px;" height="35px" width="35px"></td>
                                                        <td>{{ $c->getItem->name}} </td>
                                                        <td>{{ number_format($c->getItem->price,2) }}</td>
                                                        <td>{{ $c->quantity }}</td>
                                                        <td><button onclick="deleteItem({{$c->id}});" class="btn btn-danger" style="font-size:10px;padding:5px 10px;" id="cartItem{{ $c->id }}" ><span class="fa fa-trash"></span></button></td>
                                                    </tr>
                                                    <input type="hidden" id="itemQuantity{{ $c->id }}" value="{{ $c->quantity }}"/>
                                                @endforeach
                                                @endif
                                               </tbody>
                                         </table>
                                     </div>

                                  <div class="total">
                                      <div class="row">
                                        <div class="col-md-6">Total Amount : </div>
                                        <div class="col-md-6"><span class="pull-right totalAmountDisplay" >Php {{ number_format(array_sum($total_amount_template),2) }}</span></div>
                                        <input type="hidden" class="totalAmount" value="{{ array_sum($total_amount_template) }}"/>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-6">Total Quantity : </div>
                                        <div class="col-md-6"><span class="pull-right totalQuantityDisplay">{{ $cart_template_total_quantity }}</span></div>

                                         <input type="hidden" class="totalQuantity" value="{{ $cart_template_total_quantity }}"/>
                                      </div>
                                  </div>
                                   </div>
                                <div id="step-2" class="steps">
                                         <div class="row">
                                            <div class="col-md-6">
                                            <h4>Information Details</h4>

                                             <div class="form-group">
                                                <label for="inf-number-quests" style="color:#808080">Number of Guests</label>
                                                <input type="number" class="form-control" name="template_number_guests" id="template_number_guests"/>
                                             </div>
                                             <div class="form-group">
                                                 <label for="inf-name" style="color:#808080">Confirmation Number</label>
                                                 <input type="text" class="form-control" name="template_confirmation_number" id="template_confirmation_number"/>
                                              </div>
                                             <div class="form-group">
                                                <label for="inf-name" style="color:#808080">Delivery Address</label>
                                                <input type="text" class="form-control" name="template_delivery_address" id="template_delivery_address"/>
                                             </div>


                                                  <label for="inf-name" style="color:#808080">Delivery Date</label>
                                             <div class='input-group date' id='datetimepicker2' style="position:relative;">

                                               <input type='text' class="form-control" id="template_delivery_date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                             </div>
                                           </div>

                                           <div class="col-md-6">
                                           <h4>Payment Method</h4>
                                           <div class="form-group">
                                               <input type="radio" name="template_payment_type" value="1" id="template_payment_type" checked="checked"  class="form-control"/>
                                              <img src="{{ asset('images/cod.png') }}" alt="Cash on Delivery" width="30%" style="margin-left: 5px;" height="20%"/>
                                           </div>
                                            <div class="form-group">
                                              <input type="radio" name="template_payment_type" value="2" id="template_payment_type" class="form-control"/>
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
                                                          <td id="template_di_name"></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Contact No.  </td>
                                                          <td width="20%" align="center">:</td>
                                                          <td id="template_di_contact"></td>
                                                       </tr>
                                                        <tr>
                                                            <td>No. of Quests</td>
                                                            <td width="20%" align="center">:</td>
                                                            <td id="template_no_guests"></td>
                                                         </tr>
                                                       <tr>
                                                           <td>Delivery Address</td>
                                                           <td width="20%" align="center">:</td>
                                                           <td id="template_di_address"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Delivery Date</td>
                                                            <td width="20%" align="center">:</td>
                                                            <td id="template_di_date"></td>
                                                         </tr>
                                                  </table>



                                                 <br/>
                                                 <br>
                                                 <h4>Payment Method</h4>
                                                 <hr/>

                                                 <table id="template_table_payment_method">
                                                 <tr>
                                                     <td>Type</td>
                                                     <td width="20%" align="center">:</td>
                                                     <td id="template_pm_payment_method"></td>
                                                 </tr>
                                                 </table>


                                               </div>
                                               <div class="col-md-7">

                                                      <h4>Product Item</h4>
                                                      <hr/>
                                                      <div class="table">
                                                      <table class="table collapsed" id="item_summary_template">
                                                         <thead>
                                                          <tr>
                                                              <th></th>
                                                              <th>Name</th>
                                                              <th>Price</th>
                                                              <th>Quantity</th>
                                                          </tr>
                                                          </thead>
                                                          <tbody id="item_summary_template_body">

                                                          </tbody>
                                                      </table>

                                                      <table>
                                                          <tr>
                                                              <td style="color:#5cb85c">Total Item Quantity</td>
                                                              <td width="20%" align="center">:</td>
                                                              <td id="template_total_cart_quantity" align="right">0</td>
                                                          </tr>
                                                          <tr>
                                                              <td style="color:#5cb85c">Total Amount</td>
                                                              <td width="20%" align="center">:</td>
                                                              <td id="template_total_cart_amount" align="right">0.00</td>
                                                          </tr>
                                                      </table>
                                                      </div>
                                                      <hr/>
                                                      <div class="col-md-12">
                                                      <div class="pull-right">
                                                          <input type="checkbox" class="form-control" id="terms_and_condition_checkout_template"/>
                                                          <label for=""><a href="#">I hereby accept the term and conditions</a></label>
                                                      </div>
                                                      </div>
                                               </div>
                                           </div>
                                       </div>

                            </div>

                           </div>




                          {{--<div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                          </div>--}}
                          {{--<div class="modal-footer">
                            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal" style="font-size:15px;padding:5px 10px;"><span class="btn-notify fa fa-shopping-cart "></span> Checkout</button>
                            <form action="/cart/delete-all" method="post" id="deleteForm">
                                 <input type="hidden" name="_method" value="POST">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="hidden" name="user_id" value="{{ auth()->check()?auth()->user()->id:null }}"/>
                                <button type="button" class="btn btn-danger pull-right" id="clearCart" style="font-size:15px;padding:5px 10px;"><span class="btn-notify fa fa-trash "></span> Clear Cart</button>
                            </form>
                            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal" style="font-size:15px;padding:5px 10px;"><span class="btn-notify fa fa-cart-plus "></span> Add Item</button>
                          </div>--}}
                        </div>

                      </div>
                    </div>