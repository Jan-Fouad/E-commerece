@extends('front.master')
@section('pagename', 'Cart')
@section('content')

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <h2>Your Cart</h2>

        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th> </th>
                            <th>Product</th>
                            <th>type</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td class="product-remove">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="remove-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" style="color: #333; text-decoration: none;">
                                        <i class="far fa-window-close"></i>
                                    </a>
                                </form>
                            </td>
                        <td>{{  $item->product->name  }}</td>
                        <td>{{  $item->product->type  }}</td>
                        <td>{{  $item->product->price  }}$</td>
                        <td>{{  $item->quantity * $item->product->price }}$</td>
                        <td><form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-flex">
                                        @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control w-20">
                                    <button type="submit" class="btn btn-primary ml-2 mw-2">Update</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-4" style="text-align: right;">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Subtotal: </strong></td>
                                <td>
                                    <?php

                                    $grandTotal = 0;
                                    
                                    foreach ($items as $item) {
                                        if ($item->product) {
                                            $grandTotal += $item->product->price * $item->quantity;
                                        }
                                    }
                                    
                                    echo $grandTotal . '$';
                                    
                                    ?>
                                        </td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Shipping: </strong></td>
                                <td>$45</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>
                                    <?php 
                                    $totalwithshipping = $grandTotal +45; 
                                    echo $totalwithshipping; 
                                    ?>$
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="{{ route('front.products') }}" class="boxed-btn">Update Cart</a>
                        <a href="{{ route('front.checkout',['product' => $item->id,'totalwithshipping'=>$totalwithshipping]) }}" class="boxed-btn black">Check Out</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->

<!-- footer -->
<div class="footer-area" style="margin-bottom: 0; padding-bottom: 0;">
    <div class="container">
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </div>
</div>
<!-- end footer -->

@endsection
