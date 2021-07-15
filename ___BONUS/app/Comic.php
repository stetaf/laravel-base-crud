<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name', 'serie', 'category', 'price', 'release_date', 'isbn', 'poster'
    ];
}
