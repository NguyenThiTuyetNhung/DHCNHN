<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adverties extends Model
{

      
    protected $table = 'adverties';

    protected $fillable = [
        'name', 'url','width','height','link','target','position','order','status',
    ];

    public $timestamps = true;
}
