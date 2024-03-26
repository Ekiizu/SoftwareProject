<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [


        'product_id',
        'quantity',
        'created_at',
        'expiry_date',
        'updated_at'


];
}
