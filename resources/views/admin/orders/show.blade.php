@extends('admin.master')

@section('title', 'Show Product')

@section('content')
<body class="vertical light">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('Show Product Details') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Customer Name</label>
                                <p class="form-control-plaintext">{{ $order->customer_name }}</p>
                            </div>
                                
                            <div class="col-md-6 mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <p class="form-control-plaintext">{{ $order->product->name }}</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="type" class="form-label">Product Type</label>
                                <p class="form-control-plaintext">{{ $order->product->type }}</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="total_price" class="form-label">Total Price</label>
                                <p class="form-control-plaintext">{{ $order->total_price }} $</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <p class="form-control-plaintext">{{ $order->address }}</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <p class="form-control-plaintext">{{ $order->email }}</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
