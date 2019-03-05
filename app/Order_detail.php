<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{

      
    protected $table = 'Order_details';

    protected $fillable = [
        'quantity', 'price','order_id','product_id','size_id',
    ];

    public $timestamps = true;
      public function orders()
    {
    	return $this->hasMany(Order::class, 'Order_detail_id', 'id');
    }
     public function products()
    {
    	return $this->hasMany(Product::class, 'Order_detail_id', 'id');
    }
     public function sizes()
    {
        return $this->belongsTo(Size::class, 'Size_id', 'id')->withDefault();
    }
}
