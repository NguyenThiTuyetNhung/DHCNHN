<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{

      
    protected $table = 'news';

    protected $fillable = [
        'name', 'image','description','content',
    ];

    public $timestamps = true;
}
