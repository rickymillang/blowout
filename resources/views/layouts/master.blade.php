<!DOCTYPE HTML>

<html>
	@include('include.header')
	<body>

	<div id="page">
        @include('include.nav')


        @yield('content')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    @include('include.footer')

	</body>
</html>

