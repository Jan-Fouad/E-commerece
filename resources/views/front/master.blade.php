<!DOCTYPE html>
<html lang="en">
	<head>
	 @include('front.partials.header')


</head>
<body>
@include('front.partials.loader')	
	
	@include('front.partials.navbar')
	<div class="hero-area hero-bg">
  @include('front.partials.hero')
	</div>
  @yield('content')
  
  @include('front.partials.footer')
</body>
</html>