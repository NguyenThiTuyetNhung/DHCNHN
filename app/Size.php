<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Notifiable;

class Size extends Model
{
      
    protected $table = 'sizes';

    protected $fillable = [ 'size'];

    public $timestamps = true;
     public function product_input()
    {
    	return $this->hasMany(ProductInput::class, 'Size_id', 'id');
    }
     public function order_details()
    {
    	return $this->hasMany(Order_detail::class, 'Size_id', 'id');
    }
}
