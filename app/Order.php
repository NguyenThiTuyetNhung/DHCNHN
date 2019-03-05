<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

      
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'Total_memory','Request','Delivered','Address',
    ];

    public $timestamps = true;

    public function users()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }
    public function order_details()
    {
    	return $this->belongsTo(Order_detail::class, 'Order_detail_id', 'id')->withDefault();
    }
}
