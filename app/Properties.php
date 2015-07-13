<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'manager_id',
        'title',
        'description',
        'LeaseTerm',
        'address',
        'price',
        'amenities',
        'available',
        'type',
        'cover',
        'pets',
        'beds',
        'baths',
    ];

    function user() {

        return $this->belongsTo('\App\User');

    }
}


