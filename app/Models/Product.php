<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'sprice',
        'pprice',
        'category',
        'note',
        'description',
        'opening_stock'
        //database a ar bahire kono kisu insert a nibe na

    ];
}
