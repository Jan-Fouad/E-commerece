@if ($products->isNotEmpty())
    @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 text-center {{ $product->type }}">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="single-product.html">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </a>
                </div>
                <h3>{{ $product->name }}</h3>
                <p class="product-price">{{ $product->price }}$</p>
                <a href="cart.html" class="cart-btn">
                    <i class="fas fa-shopping-cart"></i> Add to Cart
                </a>
            </div>
        </div>
    @endforeach
@else
    <p>No products available.</p>
@endif
