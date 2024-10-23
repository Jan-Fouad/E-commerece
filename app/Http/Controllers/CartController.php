<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->route('cart.index')->with('error', 'Product not found.');
        }
    
        $cart = Cart::where('product_id', $product->id)->first();
        if ($cart) {
            $cart->quantity += 1;
        } else {
            $cart = new Cart();
            $cart->product_id = $product->id;
            $cart->quantity = 1;
        }
        $cart->save();
    
        return redirect()->route('cart.index')->with('success', 'Product added to cart');
    }
    
    public function index()
    {
        Cart::whereDoesntHave('product')->delete();
    
        $items = Cart::with('product')->get();
        return view('front.cart', compact('items'));
    }
    
        // public function removeFromCart($id)
        // {
        //     Cart::destroy($id);
        //     return redirect()->route('cart.index')->with('success', 'Product removed from cart');
        // }
   
    
    public function update(Request $request, $id)
    {
        // الحصول على العنصر في الكارت بناءً على الـ id
        $cartItem = Cart::findOrFail($id);

        // التحقق من أن الكمية المدخلة صحيحة
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        // تحديث الكمية
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        // إعادة توجيه المستخدم إلى صفحة الكارت مع رسالة نجاح
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }




        public function removeFromCart($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart');
    }

    // public function index($id)
    // {
    //   $products=Product::where('id',$id)->first();   
    //     return view('front.cart' ,compact('products'));
    // }


}
