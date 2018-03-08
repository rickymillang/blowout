
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
		<script src="{{asset('vendor/icheck/icheck.js')}}"></script>


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
                    width: 5px;
                    background-color: rgba(126, 242, 255, 0.98);
                }

                ::-webkit-scrollbar-thumb {
                    width: 5px;
                    background-image: -webkit-linear-gradient(#1fe1ff, #43ceff);
                }

                 hr{
                    border-color:#5cb85c;
                 }

				 #question-box{
					 height:400px ;
					 max-height: 100%;
					 overflow-y: auto;

				 }

				 #inputcontainer{
					 padding :10px;
					 border : 1px solid rgba(199, 199, 199, 0.71);
				 }

				.question-wizard{
					/*min-height: 148px;*/
					width: 66.66667%;
					margin: 0 auto;
				}

				.venue{
					border : 1px solid rgba(199, 199, 199, 0.71);
					padding:5px;
				}

				.venue-details{
					padding:3px;
					font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
					font-size:12px;
				}

				.venue-name{
					margin-top: 5px;
					margin-bottom: 5px;
					text-align: center;
					font-weight: 900;
					color: rgba(2, 0, 1, 0.49);
				}

				#venue-display{
					 height:800px ;
					max-height: 100%;
					overflow-y: auto;
				}

				#input-venue{
					text-align: center;
					border : 1px solid rgba(199, 199, 199, 0.71);
				}

				.venue-address .venue-price .venue-guest-number{

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
							<h1 class="question-header">Establishments</h1>
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
                        <div class="row">

                            <h4 class="est-name">{{ ucfirst($est->name) }}</h4>

                            <img src="{{ asset('storage/'.$est->image) }}" alt="Image"  width="95%" height="100%">
                        </div>

                        <div class="row rating">
                           <div class="col-sm-1">
                             <div id="rateYoDisplay{{ $est->id }}" style="margin-top: -5px;"></div>

                           </div>
                           <div class="col-sm-4"><div id="rateYo{{ $est->id }}" ></div></div>

                           @if(auth()->check())
                             <div class="col-sm-6"><button class="btn btn-sm btn-warning pull-left" style="font-size:10px;padding:5px 10px" onclick="openRateMe({{ $est->id }})">Rate Us</button></div>
                            @endif
                          </div>
                          <div class="row">
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

                <div id="rateMe{{ $est->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content">

                      <div class="modal-body" >
                        <div class="row">
                            <div class="col-md-1"></div>
                             <div class="col-md-10">
                                        <div class="modal-rate-content">
                                             <img src="{{ asset('storage/'.$est->image) }}" alt="Image"  width="40%" height="50%" class="img-circle">
                                             <br/>
                                             <br/>
                                             <h4 class="est-name" style="margin-top: 5px;">{{ ucfirst($est->name) }}</h4>
                                            <h5>How was our services? </h5>
                                            <h5>Rate us now!</h5>

                                                 <span id="rateMeNow{{ $est->id }}" ></span>
                                                <input type="hidden" id="rateMeNowVal{{ $est->id }}" value="0"/>
                                         </div>
                             </div>
                              <div class="col-md-1"></div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <script>
                  function initMap{{ $est->id }}() {
                      var uluru{{ $est->id  }} = {lat:{{ $est->latitude }}, lng:{{ $est->longitude  }}};

                      var map{{ $est->id  }} = new google.maps.Map(document.getElementById('map{{$est->id}}'), {
                        zoom: 15,
                        center: uluru{{ $est->id  }}
                      });
                      
                      var marker{{ $est->id  }} = new google.maps.Marker({
                        position: uluru{{ $est->id  }},
                        map: map{{ $est->id  }}
                      });
                    }



                     $("#rateYo"+""+"{{ $est->id }}").rateYo({
                           rating: {{ $est->totalRatings()  }},
                           ratedFill: "#ffff00",
                            starWidth: "18px"
                         });




                        $("#rateYoDisplay"+""+"{{ $est->id }}").html($("#rateYo"+""+"{{ $est->id }}").rateYo("rating"));

                         $("#rateMeNow"+""+"{{ $est->id }}").rateYo({

                                    ratedFill: "#ffff00",
                                    starWidth: "30px"
                                 });

                           $("#rateMeNow"+""+"{{ $est->id }}").on("click",function(){
                                var rateVal = $(this).rateYo("rating");

                                RateMe("{{ $est->id }}",rateVal);

                                $("#rateMe"+""+"{{ $est->id }}").modal("toggle");
                           });


                 </script>

                  <script async defer
                                     src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY')}}&callback=initMap{{ $est->id }}">
                   </script>

               </div>
                @endforeach


                @include('pages.modal.scratch-setup')

                @include('pages.modal.wizard-setup')

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
           var urlgetWizardSetUpProductList = "{{ URL::to('/cart/get-wizard-setup-product-list') }}";
           var urlGetWizardProductDetails = "{{ URL::to('/cart/get-wizard-product-details') }}";
           var urldeleteWizardCartItem = "{{ URL::to('/cart/delete-wizard-cart-item') }}";
           var urlgetCartWizardSummary = "{{ URL::to('/cart/get-cart-wizard-summary') }}";
           var urlgetWizardUserinformation = "{{ URL::to('/cart/get-wizard-user-information') }}";
           var urlCheckOutFromWizard = "{{ URL::to('/cart/checkout-from-wizard') }}";
           var urlGetQuestion = "{{ URL::to('/cart/get-question') }}";
           var urlGetVenue = "{{ URL::to('/cart/get-venue') }}";
           var urlGetPackageAndServices = "{{ URL::to('/cart/get-package-and-services') }}";
           var urlPaypalPayment = "{{ URL::to('paypal') }}";

              $(function() {
               $('.btn-notify').click(function() {
                $('.notify-bubble').show(400);
                });
             });


         $('input').iCheck({
             checkboxClass: 'icheckbox_minimal-green',
             radioClass: 'iradio_minimal-green',
             increaseArea: '20%' // optional
         });



         function organize(id){
                 var setup = $("#setup option:selected").val();
                 var url = "/establishments/"+id;
          		 var establishment_id = id;
             	 var reseturl = "/establishment/list#step-1";

                    window.location.replace(reseturl);
                if(setup == 1){
                       $(location).attr('href',url);
                }else if(setup == 2){


                   $("#scratch-setup").modal("toggle");

                    $.ajax({
                       url:urlgetSetUpProductList+"/"+id,
                       type: "POST",
                       data: {id: id,setup:setup, _token: token},
                       dataType: "html",
                       success: function (data) {
                        $('.section_product').html(data);
                       },
                       error: function (data){
                       console.log(data);
                       }

                    });

                }else{

                     $("#wizard-setup").modal("toggle");
						$("#w-establishment-id").val(establishment_id);
                      $.ajax({
                            url:urlGetQuestion+"/"+id,
                            type: "POST",
                            data: {id: id,setup:setup, _token: token},
                            dataType: "text",
                            success: function (data) {
								console.log(data);
                             $("#event-display").html(data);
                            },
                            error: function (data){
                            console.log(data);
                            // alert('wew');
                            }

                         });
                 }


         }

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


                           var number_guests = $('#number_guests').val();
                              var delivery_address = $('#delivery_address').val();
                              var delivery_date = $('#delivery_date').val();


                    /*   if(number_guests != '' && delivery_address != '' && delivery_date != '' ){*/
                              $("#next-btn").addClass('disabled');
                              getSummary(user_id)/* 1st param user id, 2nd param is  organize_type   */;
                              getUserinformation(user_id);
                              $('.checkout_from_scratch').show();
                     /*  }else{
                            $('#smartwizard').smartWizard("prev");

                             toastr.options.closeButton = true;
                            toastr.options.positionClass = 'toast-bottom-center';
                            toastr.options.showDuration = 1000;
                            toastr['warning']('All field are requireda!');

                       }*/
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

                      var confirmation_number = $('#confirmation_number').val();
                    var payment_type = $('input[name=payment_type]:checked').val();
                    var establishment = $('#establishment_id').val();
                    var id = $(this).val();
                    var organize_from = 2;

                    $.ajax({
                        url: urlCheckOutFromScratch+"/"+id,
                        type: "POST",
                        data: {id: id,establishment:establishment,number_guests:number_guests,delivery_address:delivery_address,delivery_date:delivery_date,confirmation_number:confirmation_number,payment_type:payment_type,organize_from:organize_from, _token: token},
                        dataType: "json",
                        success: function (data) {
                             if(data){

                                 toastr.options.closeButton = true;
                                toastr.options.positionClass = 'toast-bottom-center';
                                toastr.options.showDuration = 1000;
                                toastr['success']('Your Order has been processed,just wait for confirmation!');

                                $('#scratch-setup').modal('toggle');
                                $('#wizard-setup').modal('toggle');
                                $('#item_summary_scratch>tbody').empty();
                                $('#number_guests').val("");
                                $('#delivery_address').val("");
                                $('#delivery_date').val("");
                                $('#confirmation_number').val("");
                                $('#establishment_id').val("");
                                $('#di_name').text('');
                                $('#di_contact').text('');
                                $('#di_address').text('');
                                $('#di_date').text('');
                                $('#no_guests').text(0);
                                $('#scratch_total_cart_quantity').text(0);
                                $('#scratch_total_cart_amount').text(0);
                                window.location.replace(reseturl);
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
    <script src="{{ asset('js/wizard.js') }}"></script>




	</body>
</html>


