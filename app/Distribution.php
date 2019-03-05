<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{

      
    protected $table = 'distributions';

    protected $fillable = [
        'name', 'tax', 'phone', 'email' ,'representation','status',
    ];

    public $timestamps = true;

    public function products()
    {
    	return $this->hasMany(Product::class, 'Distribution_id', 'id');
    }
    public function statistics()
    {
    	return $this->hasMany(Statistics::class, 'Distribution_id', 'id');
    }
     public function groupproducts()
    {
    	return $this->hasMany(GroupProducts::class, 'Distribution_id', 'id');
    }
}
