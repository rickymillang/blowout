
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

	<script>
	    $(document).ready(function(){
	     /*   $('.register').hide();*/


	        $('#log').on('click',function(e){
                e.preventDefault();
                      /* $('.login').show();
                       $('.register').hide();*/
                       $('.register').css('display','block');
                       $('.login').css('display','none');
	        });


	         $('#regi').on('click',function(e){
                    e.preventDefault();

                    $('.login').css('display','block');
                    $('.register').css('display','none');
                           /*$('.register').show();
                           $('.login').hide();*/

                });

	    });
	</script>


