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

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
