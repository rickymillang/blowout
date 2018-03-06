@extends('layouts.master')
	<!-- <div class="page-inner"> -->

@section('content')


	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('{{asset('images/banner.png')}}')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">

					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><center>"Your Vision , Your Event , Your Way"</center></h1>

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
					<h2>Browse & Portfolio</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-3 col-md-3 col-sm-5">
					<a href="" class="fh5co-card-item">
						<figure>
							<img src="{{ asset('images/logo/House Party.jpg') }}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 style="margin-top: -70px;">House Party</h2>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5">
					<a href="" class="fh5co-card-item">
						<figure>
							<img src="{{ asset('images/logo/Wedding Party.jpg') }}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 style="margin-top: -70px;">Wedding Party</h2>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5">
					<a href="" class="fh5co-card-item">
						<figure>
							<img src="{{ asset('images/logo/Kiddie Party.jpg') }}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 style="margin-top: -70px;">Kiddie Party</h2>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5">
					<a href="" class="fh5co-card-item">
						<figure>
							<img src="{{ asset('images/logo/Beach Party.jpg') }}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 style="margin-top: -70px;">Beach Party</h2>
						</div>
					</a>
				</div>
			<!-- 	<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Seoul, South Korea</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Paris, France</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sydney, Australia</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_5.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Greece, Europe</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_6.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_6.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Spain, Europe</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
 -->
			</div>
		</div>
	</div>

	<div id="gtco-features">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center gtco-heading animate-box">
					<h2>It has never been so simple to organize party</h2>
					<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span>
							<img src="{{ asset('images/icon/1st.png') }}">
						</span>
						
						<h3><br/>Setup</h3>
						<p>Select options to organize your party</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span>
							<img src="{{ asset('images/icon/2nd.png') }}" >
						</span>
						<h3><br/>Tell us what are your needs</h3>
						<p>Answer quick question about what types of services you are looking for.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span>
							<img src="{{ asset('images/icon/4th.png') }}" style="width: 50%; height: 50%;">
						</span>
						<h3>Hired the best service</h3>
						<p>Compare services profiles and reviews to hire the best organizer.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span>
							<img src="{{ asset('images/icon/3rd.png') }}" style="width: 50%; height: 50%;">
						</span>
						<h3>Receive Notification</h3>
						<p>Within hours or days you will receive reply based on your needs.</p>
					</div>
				</div>


		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>MEET OUR TEAM</h2>
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/jeez.png') }}" class="fh5co-card-item image-popup">
						<figure><!-- 
							<div class="overlay"><i class="ti-plus"></i></div> -->
							<img src="{{ asset('images/meet-the-team/jeez.png') }}" width="100%" height="100%" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Jezreel Malazarte</h2>
							<blockquote><p>HUSTLER</p></blockquote>
							<center>
							<div class="form-group">
								<img src="{{ asset('images/icon/facebook.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/googleplus.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/github.png')}}" style="width: 50px; height: 50px;">
							</div>
					</center>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/guzman.jpg') }}" class="fh5co-card-item image-popup">
						<figure>
							<img src="{{ asset('images/meet-the-team/guzman.jpg') }}" width="100%" height="60%" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bryan Guzman</h2>
							<blockquote><p>HACKER</p></blockquote>
						</div>
						<center>
						<div class="form-group">
								<img src="{{ asset('images/icon/facebook.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/googleplus.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/github.png')}}" style="width: 50px; height: 50px;">
							</div>
						</center>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('images/meet-the-team/suico.png') }}" class="fh5co-card-item image-popup">
						<figure>
							<img src="{{ asset('images/meet-the-team/suico.png') }}"  width="100%" height="65%" alt="Image" class="img-responsive" style="margin-top: -20px;">
						</figure>
						<div class="fh5co-text">
							<h2>Jemar Suico</h2>
							<blockquote><p>HIPSTER</p></blockquote>
							<center>
							<div class="form-group">
								<img src="{{ asset('images/icon/facebook.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/googleplus.png')}}" style="width: 50px; height: 50px;">
								<img src="{{ asset('images/icon/github.png')}}" style="width: 50px; height: 50px;">
							</div>
						</center>
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

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4 ">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Boring party? It's a big NO We are your new online source that offers fantastic Party Planners,Caterings,lechons,cakes,party needs,intertainers ,packages, services and Blowouts such as House Party, Wedding Party, Beach Party, Kiddie Party & more for all life's celebrations. Our services also include an array of party organizer arrangement to suit your requirements from a simple yet stunning creation of party blowouts WE/YOU CAN CUSTOMIZE YOUR PARTY according to the theme you want.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Establishments</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Catering</a></li>
							<li><a href="#">Lechon </a></li>
							<li><a href="#">Cake Shop</a></li>
							<li><a href="#">Party Needs</a></li>
							<li><a href="#">Entertainer</a></li>
						</ul>
					</div>
				</div>

				

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Contact</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@blowout.com</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">© 2018 Blowout. All Rights Reserved.</small>
						<small class="block">Designed by <a href="#" target="_blank"> Blowout Team</a> </small>
					</p>
					<p class="pull-right">
						</p><ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					<p></p>
				</div>
			</div>

		</div>
	</footer>
	@endsection
	<!-- </div> -->