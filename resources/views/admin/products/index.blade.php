@extends('admin.master')
{{-- @include('admin.partials.scripts') --}}
@section('title','Products-index')
@section('content')
<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">ADD NEW</a>
            @if (session('success'))
               
          
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
           
            <table class="table table-hover"> 
           
                <thead>
                    <tr>
                        <th>Name</th>
                        {{-- <th>image</th> --}}
                        <th>type</th>
                        <th>price</th>
                        <th>description</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        
                    <tr>
                        <td>{{ $product->name }}</td>
                        {{-- <td>{{ $product->image }}</td> --}}
                        <td>{{ $product->type }}</td>
                        <td>{{ $product->price }}$</td>
                        <td>{{ $product->description }}</td>
                        <td>      <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="btn btn-sn btn-success">
                            <i class="fe fe-eye fe-2x"></i>
                        </a>
                        <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-sn btn-primary">
                            <i class="fe fe-edit fe-2x"></i>
                        </a>
                            
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
