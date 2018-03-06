
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

                .modal-rate-content{
                padding:20px;
                text-align: center;
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
                    <div class="fh5co-card-item">
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
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
            <div class="col-sm-1">
               <h3>Ratings </h3>
            </div>
             <div class="col-sm-1">

                <h3><span id="rateYoDisplay{{ $establishment->id }}" style="margin-top: -5px;"></span></h3>



            </div>
            <div class="col-sm-3">

                <span id="rateYo{{ $establishment->id }}" ></span>

            </div>

            <div class="col-sm-7">

             @if(auth()->check())
                 <button class="btn btn-sm btn-warning pull-right" style="font-size:14px;padding:5px 10px;" onclick="openRateMe({{ $establishment->id }})"><i class="fas fa-star"></i> Rate Us</button>
                @endif
            </div>
		</div>

		 <div id="rateMe{{ $establishment->id }}" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-sm">

                            <!-- Modal content-->
                            <div class="modal-content">

                              <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                     <div class="col-md-10">
                                                <div class="modal-rate-content">
                                                     <img src="{{ asset('storage/'.$establishment->image) }}" alt="Image"  width="40%" height="50%" class="img-circle">
                                                     <br/>
                                                     <br/>
                                                     <h4 class="est-name" style="margin-top: 5px;">{{ ucfirst($establishment->name) }}</h4>
                                                    <h5>How was our services? </h5>
                                                    <h5>Rate us now!</h5>

                                                         <span id="rateMeNow{{ $establishment->id }}" ></span>
                                                        <input type="hidden" id="rateMeNowVal{{ $establishment->id }}" value="0"/>
                                                 </div>
                                     </div>
                                      <div class="col-md-1"></div>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>


        <div class="row">
        <div class="col-lg-12">

            <button class="btn btn-primary btn-block" style="text-align: left">Reviews</button>
            <br/>
            @foreach($reviews as $r)
            <div class="col-md-12" id="reviewOutput">
                <div class="col-md-1" >
                 <img src="{{ asset($r->getUser->avatar) }}" alt="" style="border-radius: 50%"  width="100%" height="100%"/>
                </div>
                <div class="col-md-11" >
                   <h4 style="color: #09c6ab;">{{ $r->getUser->name }} <span style="font-size:12px;">{{ $r->getUser->email }}</span></h4>
                   <p>{{ $r->reviews}}</p>
                   <span class="pull-right" style="font-size:12px;font-style:italic">{{ $r->created_at->diffForhumans() }}</span>
                </div>
            </div>
            @endforeach

            @if(auth()->user())
            <div id="reviewDisplay">

            <form action="/reviews" method="POST">
               {{ csrf_field() }}

                    <div class="col-md-1" >
                     <img src="{{ asset(auth()->user()->avatar) }}" alt="" style="border-radius: 50%"  width="100%" height="100%"/>
                    </div>
                    <div class="col-md-11" id="reviewForm">
                        <div class="col-md-12">
                         <h4 style="color: #09c6ab;">{{ ucfirst(auth()->user()->name)  }}</h4>
                        </div>
                        <div class="form-group">
                            <textarea name="review" id="review" cols="3" rows="2" class="form-control"></textarea>
                            <input type="hidden" value="{{ auth()->user()->id }}" name="user_id"/>
                            <input type="hidden" value="{{ $establishment->id }}" name="establishment_id"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                 </form>
            </div>
            @endif
        </div>
        </div>
	</div>



	@include('include.footer-menu')
	<!-- </div> -->
	    @if(auth()->check()))
        <button class="btn btn-primary btn-xs"  {{--style="font-size:10px;padding:5px 10px;" --}} id="btn-message" data-toggle="modal" data-target="#message-modal"><span class="fas fa-envelope"></span></button>

        <!-- Modal -->
        <div id="message-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ ucfirst($establishment->name) }} Message Section</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="message">Compose Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Compose Message"></textarea>
                </div>

              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" id="send-message">Send Message</button>
                <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        @endif
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

            </script>

     <script>
      var token = "{{csrf_token()}}";
      var user_id = "{{ auth()->check() ? auth()->user()->id:null }}";
      var establishment_id = "{{ $establishment->id }}";
      var owner_id = "{{ $establishment->user_id }}";
      var myurl = "{{ URL::to('/') }}";
      var urlAddCart = "{{ URL::to('/cart') }}";
      var urlAllCartItem = "{{ URL::to('/cart/delete-all') }}";
      var urldeleteCartItem = "{{ URL::to('/cart') }}";
      var urlGetProductDetails = "{{ URL::to('/cart/get-product-details') }}";
      var urlGetProductList = "{{ URL::to('/cart/get-product-list') }}";
      var urlgetCartTemplateSummary = "{{ URL::to('/cart/get-cart-template-summary') }}";
      var urlgetTemplateUserinformation = "{{ URL::to('/cart/get-user-template-information') }}";
      var urlCheckOutFromTemplate = "{{ URL::to('/cart/get-checkout-from-template') }}";
      var urlSendMessage = "{{ URL::to('message/send-message')}} ";
       var reseturl = "/establishments/"+establishment_id+"#step-1";

     $(function() {
      $('.btn-notify').click(function() {
      	$('.notify-bubble').show(400);
    	});
    });


     $("#rateYo"+""+"{{ $establishment->id }}").rateYo({
           rating: {{ $establishment->totalRatings()  }},
           ratedFill: "#ffff00",
            starWidth: "30px"
         });

         $("#rateMeNow"+""+"{{ $establishment->id }}").rateYo({
                                            ratedFill: "#ffff00",
                                            starWidth: "30px"
                                         });

          $("#rateMeNow"+""+"{{ $establishment->id }}").on("click",function(){
                 var rateVal = $(this).rateYo("rating");

                 RateMe("{{ $establishment->id }}",rateVal);

                 $("#rateMe"+""+"{{ $establishment->id }}").modal("toggle");
            });

    $("#rateYoDisplay"+""+"{{ $establishment->id }}").html($("#rateYo"+""+"{{ $establishment->id }}").rateYo("rating"));


    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });


         function openRateMe(rate){

                            $('#rateMe'+rate).modal('toggle');
         }


    function RateMe(rate_id,rate){



                var urlRateMeNow = "{{ URL::to('rate') }}";

                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-center';
                        toastr.options.showDuration = 1000;

                        $.ajax({
                            url: urlRateMeNow+"/"+rate_id,
                            type: "POST",
                            data: {
                               rate:rate,
                                user_id:user_id,
                                _token: token
                            },
                            dataType: "json",
                            success: function (data) {

                                toastr['success']('Thank you for your time to rate us :)!');

                            },
                            error: function (data) {

                                console.log(data);

                                toastr['warning']('Fail to rate establishment!');
                            }
                        });

             }


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


