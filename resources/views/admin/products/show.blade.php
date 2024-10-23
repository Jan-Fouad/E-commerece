@extends('admin.master')

@section('title', __('show_product'))

@section('content')
<body class="vertical light">
<div class="container-fluid">
        <div class="row justify-content-center">
                        <div class="col-12">
                <h2 class="h5 page-title">{{ __('show_product') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">{{ __('name') }}</label>
                                <p class="form-control">{{ $product->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="type">{{ __('type') }}</label>
                                <p class="form-control">{{ $product->type }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="price">{{ __('price') }}</label>
                                <p class="form-control">{{ $product->price }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="descrption">{{ __('descrption') }}</label>
                                <p class="form-control">{{ $product->description }}</p>
                            </div>

                        </div>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
