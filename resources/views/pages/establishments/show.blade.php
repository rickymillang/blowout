
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
            top: -15px;
            right: 0;
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


           #map {
            height: 300px;
            width: 100%;
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

          h3{
            color:#808080;
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
                      <input type="hidden" value="{{ $establishment->id }}" id="template_establishment_id"/>
                	  <h3>Location</h3>
                	  <div id="map"></div>
				</div>
			</div>



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
                    $('#datetimepicker2').datetimepicker();
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
      var urlgetCartTemplateSummary = "{{ URL::to('/cart/get-cart-template-summary') }}";
      var urlgetTemplateUserinformation = "{{ URL::to('/cart/get-user-template-information') }}";
      var urlCheckOutFromTemplate = "{{ URL::to('/cart/get-checkout-from-template') }}";

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
    <script src="{{ asset('js/template.js') }}"></script>
	<script src="{{ asset('js/scratch.js') }}"></script>


         <script>
              function initMap() {
                var uluru = {lat:  {{$establishment->latitude }}, lng: {{ $establishment->longitude }}};
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
           <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY')}}&callback=initMap">
            </script>

	</body>
</html>


