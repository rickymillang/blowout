
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

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	@include('include.nav')

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Meet the Awesome team!</h1>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2></h2>

				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/jeez.png') }}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{ asset('images/meet-the-team/jeez.png') }}" width="100%" height="100%" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Jezreel Malazarte</h2>
							<blockquote><p>Code never lies, comments sometimes do</p></blockquote>

							<p><span class="btn btn-primary">Hustler</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/guzman.jpg') }}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{ asset('images/meet-the-team/guzman.jpg') }}" width="100%" height="60%" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bryan Guzman</h2>
							<blockquote><p>Computer do not solve problems, they execute solutions</p></blockquote>
							<p><span class="btn btn-primary">Hacker</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/suico.png') }}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{ asset('images/meet-the-team/suico.png') }}" width="90%" height="65%" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Jemar Suico</h2>
							<blockquote><p>Code is like humor. when you have to explain it, it's bad.</p></blockquote>
							<p><span class="btn btn-primary">Hipster</span></p>
						</div>
					</a>
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

	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
     <script src="{{asset('vendor/icheck/icheck.js')}}"></script>
	<!-- Datepicker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

	<script src="{{ asset('vendor/toastr/toastr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendor/techlab/smartwizard/dist/js/jquery.smartWizard.min.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

     <script>
          var token = "{{csrf_token()}}";
          var user_id = "{{ auth()->check() ? auth()->user()->id:null }}";
          var myurl = "{{ URL::to('/') }}";
         var urlAddCart = "{{ URL::to('/cart') }}";
         var urlAllCartItem = "{{ URL::to('/cart/delete-all') }}";
         var urldeleteCartItem = "{{ URL::to('/cart') }}";
         $(function() {
          $('.btn-notify').click(function() {
          	$('.notify-bubble').show(400);
        	});
        });


        </script>
        <script>
         $(document).ready(function(){
              $('input').iCheck({
                            checkboxClass: 'icheckbox_minimal-blue',
                            radioClass: 'iradio_minimal-blue',
                            increaseArea: '20%' // optional
                        });
         });
        </script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/template.js') }}"></script>
	<script src="{{ asset('js/cart.js') }}"></script>

	</body>
</html>


