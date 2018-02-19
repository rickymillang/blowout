
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blowout | Establishments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <!-- Include Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <link rel="icon" type="image/x-icon"  href="{{ asset('/images/blow.ico') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('vendor/datatables/datatables.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('vendor/icheck/skins/all.css')}}"  />
	<link rel="stylesheet" href="{{ asset('vendor/techlab/smartwizard/dist/css/smart_wizard.css')}}"  />
	<link rel="stylesheet" href="{{ asset('vendor/techlab/smartwizard/dist/css/smart_wizard_theme_arrows.css')}}"  />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"  />



	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>

	<script src="{{ asset('js/respond.min.js') }}"></script>




	<![endif]-->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style type="text/css">
        .container {
          margin: 100px auto;
          text-align: center;
        }

        .notify-container {
          position: relative;
        	display: inline-block;
          margin-top: 10px;
        }

          .notify-bubble {
            position: absolute;
            top: -20px;
            right: -3px;
            padding: 2px 5px 2px 6px;
            background-color: #0ec6c2;
            color: white;
            font-size: 0.65em;
            border-radius: 50%;
            box-shadow: 1px 1px 1px gray;
            display: block;
          }
        .total{
            padding:15px;
        }


          .scratc-notify-bubble {
            position: absolute;
            top: 10px;
            right: 25px;
            padding: 5px 10px 5px 10px;
            background-color: #ffffff;
            color: rgba(163, 163, 163, 0.86);
            font-size: 0.65em;
            border-radius: 50%;
           /* box-shadow: 1px 1px 1px gray;*/
            display: block;
          }

          h3{
            color:#808080;
          }

       /* .btn {
          background: #ccc;

          &:hover {
            background: darken(silver, 10%);
          }

          &:focus,
          &:focus:active,
          &:active {
            outline: none;
            box-shadow: none;
          }
        }*/

    </style>
	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	@include('include.nav')

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url( {{asset('storage/'.$establishment->image) }});">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>{{ ucfirst($establishment->name) }}</h1>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-lg-8 col-md-6 col-sm-12 gtco-heading">
					<h3 align="left">Description</h3>
					<p style="text-align: left">{{ $establishment->description }}</p>
				</div >
				<div class="col-lg-4 col-md-6 col-sm-18">
				    <h3 align="left">Organize from : </h3>
                	<select name="setup" id="setup" class="form-control">
                	    <option>Select Setup</option>
                        <option value="1" selected>Template</option>
                        <option value="2">Scratch</option>
                        <option value="3">Wizard</option>

                	</select>
                	<br/>
                	  <h3>Location</h3>
                	  <br>
                	  <div id="map"></div>
				</div>
			</div>

			<!-- Scratch Modal -->
            <div id="scratch" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color:white">Organize from Scratch</h4>


                          </div>
                          <div class="modal-body" id="smartwizard">
                          {{--<h4 class="modal-title" style="color: rgba(40, 40, 40, 0.63)">Choose what you want and need!</h4>--}}

                             <ul>
                                 <li><a href="#step-1">Step 1<br /><small>Shopping</small></a></li>
                                 <li><a href="#step-2">Step 2<br /><small>Information Details</small></a></li>
                                 <li><a href="#step-3">Step 3<br /><small>Order Summary</small></a></li>

                             </ul>
                                <div>

                            <br/>
                                     <div id="step-1" class="">

                                           <div class="row">

                                             <div class="col-md-8 section_product">

                                                 @foreach($establishment->product_types as $pt )

                                                     <button id="pt{{ $pt->id }}" onclick="show_product_list({{$pt->id}});" class="btn btn-info btn-block">{{ $pt->name }}</button>

                                                     {{--{{ $establishment->products->where('product_type_id',$pt->id) }}--}}

                                                      <div class="table product_type_list{{ $pt->id }}" id="plist" style="display:none">
                                                      <button class="btn btn-success btn-block">{{ $pt->name }} Selection</button>

                                                       <table class="table table-collapsed" id="table_scratch">
                                                            <thead>
                                                                <tr>
                                                                    <th ></th>
                                                                    <th >Item Name</th>
                                                                    <th >Price</th>
                                                                    <th >Quantity</th>
                                                                    <th ></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                             @foreach($establishment->products->where('product_type_id',$pt->id) as $product)
                                                                 <tr>
                                                                     <td><img src="{{ asset("storage/".$product->image) }}" style="max-width:100px;" height="30px" width="30px"></td>
                                                                     <td>{{ $product->name }}</td>
                                                                     <td>{{ $product->price }}</td>
                                                                     <td><input type="number" id="s_productQuantity{{ $product->id }}" placeholder="0" style="width:60px;"/></td>
                                                                     <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_cart({{ $product->id }})"><span class="fa fa-cart-plus"></span></button></td>
                                                                 </tr>
                                                              @endforeach
                                                             </tbody>
                                                       </table>
                                                   </div>
                                                 @endforeach
                                             </div>
                                             <div class="col-md-4">
                                                  <button class="btn btn-success btn-block"><span class="fa fa-shopping-cart pull-left"></span> Your Cart Item  <span class="scratc-notify-bubble scratch-total-display">0</span></button>
                                                  <input type="hidden" id="s_totalQuantity" value="0"/>
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
                                                         <tbody>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                                 <span class="pull-right">Total: <span id="s_totalAmountDisplay" >0.00</span></span>
                                                 <input type="hidden" value="0" id="s_totalAmount"/>
                                             </div>


                                          {{-- <div class="modal-footer">
                                            <button type="button" class="btn btn-warning pull-left" id="scratch_back"><span class="fa fa-arrow-left"></span> Back</button>
                                             <button type="button" class="btn btn-success">Checkout</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel </button>

                                           </div>--}}

                                       </div>
                                     </div>
                                     <div id="step-2" class="">
                                         <div class="row">
                                            <div class="col-md-6">
                                            <h3>Information Details</h3>
                                             <div class="form-group">
                                                <label for="inf-name" style="color:#808080">Delivery Address</label>
                                                <input type="text" class="form-control" name="delivery_address" id="delivery_address"/>
                                             </div>

                                                  <label for="inf-name" style="color:#808080">Delivery Date</label>
                                                <div class='input-group date' id='datetimepicker1' style="position:relative;">

                                                   <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>


                                           </div>

                                           <div class="col-md-6">
                                           <h3>Payment Method</h3>
                                           <div class="form-group">
                                               <input type="radio" name="payment_type" value="cod" id="cod" class="form-control"/>
                                              <img src="{{ asset('images/cod.png') }}" alt="Cash on Delivery" width="30%" style="margin-left: 5px;" height="20%"/>
                                           </div>
                                            <div class="form-group">
                                              <input type="radio" name="payment_type" value="cod" id="paypal" class="form-control"/>
                                              <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" style="margin-left: 5px;" alt="PayPal Logo">
                                          </div>
                                           </div>

                                         </div>

                                     </div>
                                     <div id="step-3" class="">
                                         <div class="row">
                                            <div class="col-md-6">
                                                <h3>Product </h3>
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
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <h3>Information Details</h3>
                                                   Name             : Guzman G. Guzman
                                                   <br/>
                                                   Contact No.      :  0923538564
                                                    <br/>
                                                   Delivery Address : Sitio Mansanita Tisa, Cebu City
                                                   <br/>
                                                   Delivery Date    : February 20,2018
                                                   <br/>
                                                   <br>
                                                   <h3>Payment Method</h3>
                                                   Type :  Cash on Delivery

                                             </div>
                                         </div>
                                     </div>

                            </div>

                        </div>


                      </div>
                    </div>
             </div>
            <!-- End of Modal Scratch -->

            <!-- Wizard Modal -->
                <div id="wizard" class="modal fade" role="dialog">
                          <div class="modal-dialog" >

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color:white">Organize from Wizard</h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                 </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel</button>
                                <button type="button" class="btn btn-success btn-xs"   ><span class="fa fa-cart-plus"></span> Add to cart</button>
                              </div>
                            </div>

                          </div>
                        </div>
                 </div>
              <!-- End of Modal Wizard -->

			<div class="row">
			    <h3>Products</h3>
			    <br/>
			    @foreach($products as $p)
			    <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="fh5co-card-item">
                        <a href="{{ asset('storage/'.$p->image) }}" class="image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="{{ asset('storage/'.$p->image) }}" alt="Image" class="img-responsive">
                            </figure>
                             </a>
                            <div class="fh5co-text">
                                <h2>{{ ucfirst($p->name) }}</h2>
                                <br/>
                                <p style="text-align: left">Description : {{ str_limit($p->description,250) }}
                                    <br/>Type : {{ $p->product_type->name }}
                                </p>
                            <div class="group">
                                <button class="btn btn-primary btn-xs">Price : {{ number_format($p->price,2)  }}</button>
                                <button class="btn btn-primary btn-xs" @if(auth()->check())data-toggle="modal" data-target="#prod{{ $p->id }}" @else onclick="trappings();" @endif> <span class="fa fa-cart-plus"></span> Cart</button>
                            </div>
                        </div>

                        <div class="ui large star rating"></div>
                   </div>
                </div>

                <!-- Product Modal -->
                <div id="prod{{ $p->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ $p->name }}</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('storage/'.$p->image) }}" alt="Image" >
                            </figure>
                            </div>
                            <div class="col-md-6">
                                <p style="text-align: left">Description : {{ str_limit($p->description,250) }}
                                    <br/>Type : {{ $p->product_type->name }}
                                </p>
                                <input type="number" name="quantity" id="quantity{{ $p->id }}"  placeholder="0" class="form-control"/>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel</button>
                        <button type="button" class="btn btn-success btn-xs"  onclick="addCart('{{ $p->id }}',1);" ><span class="fa fa-cart-plus"></span> Add to cart</button>
                      </div>
                    </div>

                  </div>
                </div>
                @endforeach
			</div>
			<div class="row">
                <h3>Services</h3>
                <br/>
                @foreach($services as $s)
                <div class="col-lg-4 col-md-4 col-sm-6">
                     <div class="fh5co-card-item">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('storage/'.$establishment->image) }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>{{ ucfirst($s->name) }}</h2>
                            <br/>
                        <div class="group">
                            <button class="btn btn-primary btn-xs">Price : {{ number_format($s->price,2)  }}</button>
                            <button class="btn btn-primary btn-xs" onclick="addCart('{{ $s->id }}',2);"><span class="fa fa-cart-plus"></span> Cart</button>
                        </div>
                        </div>

                        <div class="ui large star rating"></div>
                   </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <h3>Packages</h3>
                <br/>
                @foreach($packages as $pack)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ asset('storage/'.$establishment->image) }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('storage/'.$establishment->image) }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>{{ ucfirst($pack->name) }}</h2>
                            <br/>

                        <div class="group">
                            <button class="btn btn-primary btn-xs">Price : {{ number_format($pack->price,2)  }}</button>
                            <button class="btn btn-primary btn-xs" onclick="addCart('{{ $pack->id }}',3);"><span class="fa fa-cart-plus"></span> Cart</button>
                        </div>
                        </div>
                        <div class="ui large star rating"></div>
                    </a>
                </div>
                @endforeach
            </div>
		</div>
	</div>



	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	@include('include.footer-menu')
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>

	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
	 <script src="{{asset('vendor/icheck/icheck.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('vendor/number/jquery.number.js') }}"></script>
	<!-- Datepicker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('vendor/toastr/toastr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendor/techlab/smartwizard/dist/js/jquery.smartWizard.min.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#smartwizard').smartWizard('theme','arrows');
    });
    </script>
     <script>
      var token = "{{csrf_token()}}";
      var user_id = "{{ auth()->check() ? auth()->user()->id:null }}";
      var myurl = "{{ URL::to('/') }}";
      var urlAddCart = "{{ URL::to('/cart') }}";
      var urlAllCartItem = "{{ URL::to('/cart/delete-all') }}";
      var urldeleteCartItem = "{{ URL::to('/cart') }}";
      var urlGetProductDetails = "{{ URL::to('/cart/get-product-details') }}";
      var urlGetProductList = "{{ URL::to('/cart/get-product-list') }}";
     $(function() {
      $('.btn-notify').click(function() {
      	$('.notify-bubble').show(400);
    	});
    });


    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });

    </script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/cart.js') }}"></script>

	<script src="{{ asset('js/scratch.js') }}"></script>
	<script type="text/javascript">
            $(document).ready(function(){

                // Step show event
                $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                   //alert("You are on step "+stepNumber+" now");
                   if(stepPosition === 'first'){
                       $("#prev-btn").addClass('disabled');



                   }else if(stepPosition === 'final'){
                       $("#next-btn").addClass('disabled');
                   }else{


                       $("#prev-btn").removeClass('disabled');
                       $("#next-btn").removeClass('disabled');
                   }
                });



                // Toolbar extra buttons
                var product     =  $('<button></button>').text('Store').addClass('btn btn-warning pull-left').attr('id','scratch_back').on('click', function(){  $('#scratch_back').hide();
                                                                                                                                                     $('.section_product>button').show();
                                                                                                                                                     $('.section_product>.table').hide(); });
                var btnFinish = $('<button class="btn btn-success">Checkout</button>');
                var btnCancel = $(' <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancel </button>');
                  $('#scratch_back').hide();

                // Smart Wizard
                $('#smartwizard').smartWizard({
                        selected: 0,
                        theme:  'arrows',
                        transitionEffect:'fade',
                        showStepURLhash: true,
                        toolbarSettings: {toolbarPosition: 'bottom',
                                          toolbarExtraButtons: [product,btnFinish, btnCancel]
                                        }
                });


                $("#prev-btn").on("click", function() {
                    // Navigate previous
                    $('#smartwizard').smartWizard("prev");
                    return true;
                });

                $("#next-btn").on("click", function() {
                    // Navigate next
                    $('#smartwizard').smartWizard("next");
                    return true;
                });


                      $(".sw-next-btn").hide();
                     $(".sw-prev-btn").hide();


            });
        </script>

         <script>
              function initMap() {
                var uluru = {lat: 10.301553, lng: 123.870529};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 15,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>


	</body>
</html>


