<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apriori extends Model
{

      
    protected $table = 'aprioris';

    protected $fillable = [
        'product_id', 'view1','view2',
    ];

    public $timestamps = true;
     public function products()
    {
    	return $this->hasMany(Product::class, 'Apriori_id', 'id');
    }
}
