<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_lot_url',
        'vehicle_lot_number',
        'vehicle_retail_value',
        'vehicle_sale_date',
        'vehicle_year',
        'vehicle_make',
        'vehicle_model',
        'vehicle_engine_type',
        'vehicle_cylinders',
        'vehicle_vin',
        'vehicle_title_code',
        'vehicle_odometer',
        'vehicle_odometer_description',
        'vehicle_damage_description',
        'vehicle_current_bid',
        'vehicle_my_bid',
        'vehicle_item_number',
        'vehicle_sale_name',
    ];
}
