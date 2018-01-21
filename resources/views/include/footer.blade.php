
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>
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


