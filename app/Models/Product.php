<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        public function orders()
        {
            return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
        }
    


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); 
    
    }

    protected $fillable = ['name','type','price','description'];
    protected $guard = 'id';
}
