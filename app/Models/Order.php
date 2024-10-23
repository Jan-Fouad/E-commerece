<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity');
    }

    
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); 
    }
    // protected $fillable = [
    //     'customer_name',
    //     'email',
    //     'address',
    //     'phone',
    //     'total_price'
    // ];
    protected $guarded=['id'];

}
