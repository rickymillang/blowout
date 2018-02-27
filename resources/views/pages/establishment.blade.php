
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
    	<link rel="stylesheet" href="{{ asset('vendor/techlab/smartwizard/dist/css/smart_wizard_theme_arrows.css')}}"/>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"  />



    	<!-- Modernizr JS -->
    	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    	<!-- FOR IE9 below -->
    	<!--[if lt IE 9]>

    	<script src="{{ asset('js/respond.min.js') }}"></script>




    	<![endif]-->
    	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    	<script src="{{ asset('js/jquery.min.js') }}"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


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

            .my-card{
                    width: 100%;
                    height: 400px;
                    padding: 20px;
                    border: 1px solid rgba(212, 212, 212, 0.11);
                    margin-bottom: 15px;
                    box-shadow: 3px 5px 12px #c7c7c7;
            }

               #map {
                height: 300px;
                width: 100%;
               }

               .rating{
                margin-top: 5%;
               }
               .est-name{
               color:#b9b2b2;
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


              h4{
                color:#5cb85c;
                font-weight: bold;
              }



              .address{
              margin-top: 10px;
                padding:5px;
                color:#b9b2b2;
              }
              .steps {
                  max-height: calc(100vh - 300px);
                  overflow-y: auto;
                  overflow-x: hidden;
              }

              .modal-content{
              font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
              font-size:12px;
              }

              .modal-content > .steps > button{
              font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
               font-size:12px;
              }

                ::-webkit-scrollbar {
                    width: 8px;
                    background-color: rgba(126, 242, 255, 0.98);
                }

                ::-webkit-scrollbar-thumb {
                    width: 8px;
                    background-image: -webkit-linear-gradient(#1fe1ff, #43ceff);
                }

                 hr{
                    border-color:#5cb85c;
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


	<div id="page">


	<!-- <div class="page-inner"> -->
	@include('include.nav')

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('{{asset('images/banner.png')}}')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Establishments</h1>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
			<div class="col-lg-9">

			    <button class="btn btn-primary filter-button" value="1">
			        Catering
			    </button>
			     <button class="btn btn-primary filter-button" value="2">
                    Lechon
                </button>
                 <button class="btn btn-primary filter-button" value="4">
                    Cake
                </button>
                 <button class="btn btn-primary filter-button" value="6">
                    Planner
                </button>
                 <button class="btn btn-primary filter-button" value="5">
                    Entertainer
                </button>
                 <button class="btn btn-primary filter-button" value="3">
                    Party Needs
                </button>


			</div>
                <div class="col-lg-3">

                    <select name="setup" id="setup" class="form-control pull-right" @if(!auth()->check()) disabled @endif>
                        <option >Organize from:</option>
                        <option value="1" selected >Template</option>
                        <option value="2">Scratch</option>
                        <option value="3">Wizard</option>

                    </select>

                </div>
			</div>
			<br/>


             @foreach($establishments as $est)
             <div id="establishment">
             <div class="my-card">

                    <div class="col-lg-4">

                            <h4 class="est-name">{{ ucfirst($est->name) }}</h4>

                        <img src="{{ asset('storage/'.$est->image) }}" alt="Image"  width="95%" height="100%">
                        <div class="row rating">
                           <div class="col-sm-1">
                             <div id="rateYoDisplay{{ $est->id }}"></div>
                           </div>
                          <div class="col-lg-3">
                          <div id="rateYo{{ $est->id }}" ></div>
                          </div>
                            <br/>
                            <div class="col-lg-12">
                              <span class="address"><i class="fas fa-map-marker-alt" style="color:rgba(210, 17, 29, 0.80)"></i>&nbsp; {{ $est->address }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <br/>
                            <div>

                                <p style="text-align: left">{{ str_limit($est->description,250) }}</p>
                                 <p><span class="btn btn-primary btn-sm" onclick="organize({{ $est->id  }})"><i class="fas fa-eye"></i> More</span>
                                 <input type="hidden" id="current_estab{{ $est->id }}" value="{{ $est->id }}"/>
                                <span class="btn btn-success bt-sm"><i class="fas fa-bookmark"></i> Bookmark</span></p>

                            </div>
                    </div>
                    <div class="col-lg-4">
                        <br/>
                         <div id="map{{ $est->id }}" style=" height: 300px;width: 100%;"></div>
                    </div>
                </div> <!--end of my card-->


                <script>
                  function initMap{{ $est->id }}() {
                      var uluru{{ $est->id  }} = {lat:{{ $est->latitude }}, lng:{{ $est->longitude  }}};

                      var map{{ $est->id  }} = new google.maps.Map(document.getElementById('map{{$est->id}}'), {
                        zoom: 15,
                        center: uluru{{ $est->id  }}
                      });

                      var marker = new google.maps.Marker({
                        position: uluru{{ $est->id  }},
                        map: map{{ $est->id  }}
                      });
                    }


                      var rate_id = {{ $est->id }};
                     $("#rateYo"+rate_id).rateYo({
                           rating: 3.6,
                           ratedFill: "#ffff00",
                            starWidth: "18px"
                         });
                        $("#rateYoDisplay"+rate_id).html($("#rateYo"+rate_id).rateYo("rating"));
                 </script>

                  <script async defer
                                     src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY')}}&callback=initMap{{ $est->id }}">
                   </script>

               </div>
                @endforeach



                 <!--Start of model div -->
                <div id="scratch-setup" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #0ec6c2;border-color: #0ec6c2;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title-setup" style="color:white">Organize from Scratch</h4>
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
                                         <div class="col-md-4">
                                              <button class="btn btn-success btn-block"><span class="fa fa-shopping-cart pull-left"></span> Your Cart Item  <span class="scratc-notify-bubble scratch-total-display">{{ $cart_scratch_total_quantity }}</span></button>
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

                                                     <tbody id="wizard_item_cart">
                                                         @foreach($cart_wizard as $cw)
                                                            <tr id="wizard_item{{ $cw->id }}">
                                                                <td><img src="{{ $cw->item_type == 1? asset("storage/".$cw->getItem->image) : asset("storage/".$cw->getItem->getEstablishment['image']) }}"style="max-width:100px;" height="35px" width="35px"></td>
                                                                <td>{{ $cw->getItem->name}} </td>
                                                                <td>{{ number_format($cw->getItem->price,2) }}</td>
                                                                <td>{{ $cw->quantity }}</td>
                                                                <td><button class='btn btn-danger' onclick='scratch_deleteItem({{ $cw->id }})' style='font-size:10px;padding:5px 10px;'><span class='fa fa-trash'></span></button></td>
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
                                            <label for="inf-number-quests" style="color:#808080">Number of Quests</label>
                                            <input type="number" class="form-control" name="number_guests" id="number_guests"/>
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
	<script type="text/javascript" src="{{ asset('vendor/techlab/smartwizard/dist/js/jquery.smartWizard.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('js/summary.js') }}"></script>
	<script src="{{ asset('vendor/toastr/toastr.js') }}"></script>
    <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
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
           var urlgetCartScratchSummary = "{{ URL::to('/cart/get-cart-scratch-summary') }}";
           var urlgetSetUpProductList = "{{ URL::to('/cart/get-setup-product-list') }}";
           var urlgetUserinformation = "{{ URL::to('/cart/get-user-scratch-information') }}";
           var urlCheckOutFromScratch = "{{ URL::to('/cart/checkout-from-scratch') }}";

          $(function() {
           $('.btn-notify').click(function() {
           	$('.notify-bubble').show(400);
         	});
         });

            $('tbody#scratch_item_cart').hide();
            $('tbody#wizard_item_cart').hide();


         $('input').iCheck({
             checkboxClass: 'icheckbox_minimal-green',
             radioClass: 'iradio_minimal-green',
             increaseArea: '20%' // optional
         });



         function organize(id){
                 var setup = $("#setup option:selected").val();
                 var url = "/establishments/"+id;


                if(setup == 1){
                       $(location).attr('href',url);
                }else{

                    if(setup == 2){
                         $('tbody#scratch_item_cart').show();

                    }else{
                         $('tbody#wizard_item_cart').show();
                         $('#modal-title-setup').html('Organize from Wizard');
                    }

                   $("#scratch-setup").modal("toggle");

                    $.ajax({
                       url:urlgetSetUpProductList+"/"+id,
                       type: "POST",
                       data: {id: id,setup:setup, _token: token},
                       dataType: "text",
                       success: function (data) {

                        $('.section_product').html(data);
                       },
                       error: function (data){
                       console.log(data);
                       }

                    });

                }
         }

         $(".filter-button").on("click",function(){
                var type_id = $(this).val();

                 $.ajax({
                    url: urlAddCart,
                    type: "POST",
                    data: {type_id: type_id, _token: token},
                    dataType: "json",
                    success: function (data) {},
                    error: function (data){}
                    });

         });

         </script>

         @if(auth()->check()))
         <script type="text/javascript">
        $(document).ready(function(){
                var user_id = {{ auth()->user()->id  }};


             $("#terms_and_condition_checkout_scratch").on('ifUnchecked', function(event) {

                    //Uncheck all checkboxes

                    $('.checkout_from_scratch').attr('disabled','disabled');
                });
                //When checking the checkbox
                $("#terms_and_condition_checkout_scratch").on('ifChecked', function(event) {
                    //Check all checkoxes
                   $('.checkout_from_scratch').removeAttr('disabled');
                });

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");

               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
                    $('.checkout_from_scratch').hide();
               }else if(stepPosition === 'final'){
/*
                   $("#next-btn").addClass('disabled');
                   getSummary({{ auth()->user()->id}});
                   getUserinformation({{ auth()->user()->id  }});
                   $('.checkout_from_scratch').show();*/

                        var number_guests = $('#number_guests').val();
                              var delivery_address = $('#delivery_address').val();
                              var delivery_date = $('#delivery_date').val();


                       if(number_guests != '' && delivery_address != '' && delivery_date != '' ){
                              $("#next-btn").addClass('disabled');
                              getSummary(user_id)/* 1st param user id, 2nd param is  organize_type   */;
                              getUserinformation(user_id);
                              $('.checkout_from_scratch').show();
                       }else{
                            $('#smartwizard').smartWizard("prev");

                             toastr.options.closeButton = true;
                            toastr.options.positionClass = 'toast-bottom-center';
                            toastr.options.showDuration = 1000;
                            toastr['warning']('All field are requireda!');

                       }
               }else{

                   $('.checkout_from_scratch').hide();
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });

            // Toolbar extra buttons
            var product     =  $('<button></button>').text('Product').addClass('btn btn-warning pull-left').attr('id','scratch_back').on('click', function(){  $('#scratch_back').hide();
                                                                                                                                                 $('.section_product>button').show();
                                                                                                                                                 $('.section_product>.table').hide(); });
            var btnFinish = $('<button type="button" class="btn btn-success checkout_from_scratch" disabled value="'+user_id+'">Checkout</button>');
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
            $('.checkout').hide();

            $('.checkout_from_scratch').on('click',function(){
                    var number_guests = $('#number_guests').val();
                    var delivery_address = $('#delivery_address').val();
                    var delivery_date = $('#delivery_date').val();
                    var payment_type = $('input[name=payment_type]:checked').val();
                    var establishment = $('#establishment_id').val();
                    var id = $(this).val();
                    var organize_from = 2;

                    $.ajax({
                        url: urlCheckOutFromScratch+"/"+id,
                        type: "POST",
                        data: {id: id,establishment:establishment,number_guests:number_guests,delivery_address:delivery_address,delivery_date:delivery_date,payment_type:payment_type,organize_from:organize_from, _token: token},
                        dataType: "json",
                        success: function (data) {
                             if(data){

                                 toastr.options.closeButton = true;
                                toastr.options.positionClass = 'toast-bottom-center';
                                toastr.options.showDuration = 1000;
                                toastr['success']('Your Order has been processed,just wait for confirmation!');

                                $('#scratch-setup').modal('toggle');
                             }
                        },
                        error: function (data) {
                        }
                    });
                });
        });
</script>
@endif
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/scratch.js') }}"></script>



	</body>
</html>


