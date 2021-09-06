<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
