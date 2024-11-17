<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';

    // Define which fields are mass assignable
    protected $fillable = [
        'slug', 'url', 'vin', 'lot_number', 'auction', 
        'country', 'sale_branch', 'seller', 'auction_date', 'vehicle_type',  'year', 'make', 'model', 
        'color', 'bodytype', 'drive', 'fuel', 'engine', 
        'transmission', 'images' 
    ];

    // Automatically cast the images field to an array
    protected $casts = [
        'images' => 'array',
    ];
}
