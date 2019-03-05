<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

      
    protected $table = 'products';

    protected $fillable = [
        'name', 'detail','price','price_new','image','view','status','Distribution_id','Group_product_id', 'note', 
    ];

    public $timestamps = true;

    public function distributions()
    {
    	return $this->belongsTo(Distribution::class, 'Distribution_id', 'id')->withDefault();
    }
    public function order_details()
    {
    	return $this->belongsTo(Order_detail::class, 'Order_detail_id', 'id')->withDefault();
    }
     public function aprioris()
    {
    	return $this->belongsTo(Apriori::class, 'Apriori_id', 'id')->withDefault();
    }
     public function product_input()
    {
    	return $this->hasMany(ProductInput::class, 'Product_id', 'id');
    }
     public function groupproducts()
    {
    	return $this->belongsTo(GroupProduct::class, 'GroupProduct_id', 'id')->withDefault();
    }
}
