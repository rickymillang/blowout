
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
	<title>Home | About Us</title>
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

            <link rel="icon" type="image/x-icon"  href="{{ asset('/images/blow.ico') }}">
        	<!-- Theme style  -->
        	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>About Us</h1>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	


	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Blowout </h2>
					<p>Boring party? It's a big NO We are your new online source that offers fantastic Party Planners,Caterings,lechons,cakes,party needs,intertainers
                       ,packages, services and Blowouts such as House Party, Wedding Party, Beach Party, Kiddie Party & more for all
                       life's celebrations. Our services also include an array of party organizer arrangement to suit your requirements
                       from a simple yet stunning creation of party blowouts WE/YOU CAN CUSTOMIZE YOUR PARTY according to the theme you want.</p>
				</div>
			</div>
			{{--<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul class="fh5co-faq-list">
						<li class="animate-box">
							<h2>What is Traveler?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>What language are available?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>I have technical problem, who do I email?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>Can I have a username that is already taken?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>How do I use Traveler features?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>Is Traveler free??</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
					</ul>
				</div>
			</div>--}}
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

	<!-- Datepicker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>


	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	<script src="{{ asset('js/cart.js') }}"></script>
	</body>
</html>

