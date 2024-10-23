<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;

class FrontController extends Controller
{
    public function index()
    {
      return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function products(Request $request)
    {
        $products=Product::paginate(config('pagination.count'));
    
        return view('front.products.products',get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact');
    }

  
    public function checkout(Request $request)
    {  
        // جلب كل العناصر الموجودة في السلة مع المنتجات المرتبطة بها
        $items = Cart::with('product')->get();
        $totalwithshipping = $request->input('totalwithshipping');
        
        // dd($totalwithshipping );
        return view('front.checkout', compact('items','totalwithshipping'));
    }
    
    // public function store(StoreOrderRequest $request)
    // {
    //     $data=$request->validated();
    //     Order::create($data);   

    //     return redirect()->route('front.index')->with('success', 'Ordered successfully');
 
    // }
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'total_price' => 'required|numeric',
            'product_id' => 'required|array|',
            'product_id.*' => 'exists:products,id',
        ]);
        $order = new Order();
        $order->customer_name = $request->customer_name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->total_price = $request->total_price; // تأكد من حفظ السعر الإجمالي
        
        // استخدم المجموع الكلي
        foreach ($request->product_id as $id) {
            $order->product_id = $id; // تأكد من تعيين product_id
            // dd($order->product);
            $order->save(); // احفظ البيانات
        }
    
        return redirect()->route('front.index')->with('success', 'Order placed successfully!');
    }


        
}




