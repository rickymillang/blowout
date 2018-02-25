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
						@endif
						<li class="notify-container"> <a href="javascript:void(0);" class="itemCart" @if(count($cart_template) != 0) data-toggle="modal" data-target="#cart" @endif>
                                <input type="hidden" class="cartItemTotal" value="{{ count($cart_template) }}"/>
                                <span class="notify-bubble cartItemTotalBubble" >{{ count($cart_template) }}</span>
                                <span class="btn-notify fa fa-shopping-cart fa-2x"></span>


					</ul>
				</div>

			</div>

		</div>
	</nav>

	        	<!-- Cart Modal -->
                    <div id="cart" class="modal fade" role="dialog">
                      <div class="modal-dialog">

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
                           <div>
                            <div id="step-1" class="steps" style="">
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
                                  </div>
                                  <div class="total">
                                      <div class="row">
                                        <div class="col-md-6">Total Amount : </div>
                                        <div class="col-md-6"><span class="pull-right totalAmountDisplay" >Php {{ number_format(array_sum($total_amount_template),2) }}</span></div>
                                        <input type="hidden" class="totalAmount" value="{{ array_sum($total_amount_template) }}"/>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-6">Total Quantity : </div>
                                        <div class="col-md-6"><span class="pull-right totalQuantityDisplay">{{ count($cart_template) }}</span></div>

                                         <input type="hidden" class="totalQuantity" value="{{ count($cart_template) }}"/>
                                      </div>
                                  </div>

                            </div>
                            <div id="step-2" ></div>
                            <div id="step-3" ></div>
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