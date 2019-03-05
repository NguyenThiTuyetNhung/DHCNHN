<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInput extends Model
{

      
    protected $table = 'productinput';

    protected $fillable = [
        'product_id', 'size_id',
    ];

    public $timestamps = true;
    public function products()
    {
    	return $this->belongsTo(Product::class, 'Product_id', 'id')->withDefault();
    }
     public function sizes()
    {
    	return $this->belongsTo(Size::class, 'Size_id', 'id')->withDefault();
    }
}
