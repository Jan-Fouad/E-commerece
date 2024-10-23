@extends('admin.master')
@section('title','Orders - Index')

@section('content')
<body class="vertical light">
    <div class="container mt-5">
        <h2 class="mb-4">Orders List</h2>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->total_price }}$</td>
                            <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', ['order' => $order->id]) }}" class="btn btn-sm btn-success">
                                    <i class="fe fe-eye"></i> View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($orders->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        No orders available.
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
@endsection
