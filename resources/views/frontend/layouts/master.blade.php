<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')	
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6698f2c1595beb00197dfa42&product=sticky-share-buttons&source=platform" async="async"></script>
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('frontend.layouts.footer')

</body>
</html>