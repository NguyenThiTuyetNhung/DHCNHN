<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

      
    protected $table = 'contacts';

    protected $fillable = [
        'name', 'company','address','email','tell','detail',
    ];

    public $timestamps = true;
}
