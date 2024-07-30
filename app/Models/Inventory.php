<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'category',
        'expiration_date',
        'image',
    ];

public function products()
{
    return $this->hasMany(Product::class);
}
}
