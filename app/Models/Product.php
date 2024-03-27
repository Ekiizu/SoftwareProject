<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'unit_price',
        // 'inventory_id'

];



// public function inventory(){

// return $this->belongsTo(Inventory::class);
// }

}
