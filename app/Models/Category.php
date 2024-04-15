<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        // 'product_id',
        'category_name',
        'vat_rate',

];

public function products()
{
    return $this->hasMany(Product::class);
}
}
