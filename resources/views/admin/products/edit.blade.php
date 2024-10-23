@extends('admin.master')

@section('title','edit products')

@section('content')
<body class="vertical light">
<div class="container-fluid">
        <div class="row justify-content-center">
                        <div class="col-12">
                <h2 class="h5 page-title">{{ __('show_message') }}</h2>
                <form method="POST" action="{{route('admin.products.update',['product' => $product->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="name">name</label>
                                <input type="text" name="name"  class="form-control"
                                placeholder="name" value="{{ $product->name }}">
                            </div>
                            {{-- <div class="col-md-3">
                            <label for="image">image</label>
                            <input type="file" name="image" accept="image/*" class="form-control"
                            placeholder="image">
                        </div> --}}
                             <div class="mb-3">
                                <label  class="type">Type</label>
                                <select name="type" class="form-control" value={{ $product->type }}>
                              <option value="labtops">Labtops</option>        
                              <option value="phones">Phones</option>        
                              <option value="food">Food</option>        
                                </select>
                            </div> 
                            {{-- <div class="col-md-2">
                              <label for="type">type</label>
                              <input type="number" name="type" class="form-control"
                              placeholder="type" value="{{ $product->type }}">
                          </div>
                          --}}
                              <div class="col-md-2"> 
                                <label for="price">price</label>
                                <input type="number" name="price" class="form-control"
                                placeholder="price" value="{{ $product->price }}">
                            </div>
                            <div class="col-md-3">
                                <label for="description">description</label>
                                <input type="text" name="description"  class="form-control"
                                placeholder="description" value="{{ $product->description }}">
                            </div>
                        </div>
                        <button type="submit"class="btn btn-primary mt-3">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
