@extends('front.master')
@section('pagename','Products')
@section('products-nav','current-list-item')
@section('content')
	

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Phones">Phones</li>
                            <li data-filter=".Labtops">Labtops</li>
                            <li data-filter=".Foods">Foods</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@if ($products->isNotEmpty())
				@foreach ($products as $product)
					<div class="col-lg-4 col-md-6 text-center {{ $product->type }}">
						<div class="single-product-item">
							<div class="product-image">
								
								<img src="{{ asset('assets/img/' . $product->imagepath )}}" alt="{{ $product->name }}">
								
							</div>
							<h3>{{ $product->name }}</h3>
							<p class="product-price">{{ $product->price }}$</p>
							<a href="{{ route('cart.add', ['id' => $product->id]) }}" class="cart-btn">
								<i class="fas fa-shopping-cart"></i> Add to Cart
							</a>
						</div>
					</div>
				@endforeach
			@else
				<p>No products available.</p>
			@endif
			
			
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<nav aria-label="Page navigation">
							<ul class="pagination justify-content-center">
								{{ $products->links('pagination::bootstrap-5') }}
							</ul>
						</nav>
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection