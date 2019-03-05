<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupProduct extends Model
{

      
    protected $table = 'group_products';

    protected $fillable = [
        'name', 'content','image','order','status',
    ];

    public $timestamps = true;
     public function distributions()
    {
    	return $this->belongsTo(Distribution::class, 'Distribution_id', 'id')->withDefault();
    }
       public function products()
    {
    	return $this->hasMany(Product::class, 'Product_id', 'id');
    }
}
