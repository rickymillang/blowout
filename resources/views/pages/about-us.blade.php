@extends('layouts.master')
  <!-- <div class="page-inner"> -->

@section('content')
	<body>

	<div id="page">

	
	<!-- <div class="page-inner"> -->
	@include('include.nav')
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('{{asset('images/banner.png')}}')">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">

          <div class="row row-mt-15em">

            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
              <h1><center>About Us</center></h1>

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
@endsection
