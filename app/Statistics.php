<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{

      
    protected $table = 'statistics';

    protected $fillable = [
        'user_id', 'distribution_id', 'viewnumber', 
    ];

    public $timestamps = true;
     public function users()
    {
    	return $this->belongsTo(Statistics::class, 'Statistics_id', 'id')->withDefault();
    }
    public function distributions()
    {
    	return $this->belongsTo(Distribution::class, 'Distribution_id', 'id')->withDefault();
    }
}
