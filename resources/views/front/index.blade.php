@extends('front.master')
@section('content')
@section('pagename','Home')
@section('index-nav','current-list-item')


<!-- features list section -->
<div class="list-section pt-80 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-shipping-fast"></i>
					</div>
					<div class="content">
						<h3>Free Shipping</h3>
						<p>When order over $75</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="content">
						<h3>24/7 Support</h3>
						<p>Get support all day</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-sync"></i>
					</div>
					<div class="content">
						<h3>Refund</h3>
						<p>Get refund within 3 days!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Categries</h3>
						<p>we sell with best price</p>
					</div>
				</div>
			</div>
			@if (session('success'))
               
          
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('front.products.phones') }}"><img src="assets/img/phone-pro.jpg" alt=""></a>
						</div>
						<h3>Phones</h3>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('front.products.laptops') }}"><img src="assets/img/labtops.jpg" alt=""></a>
						</div>
						<h3>Labtops</h3>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('front.products.foods') }}"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Foods</h3>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->



@endsection
