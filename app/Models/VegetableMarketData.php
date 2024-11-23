<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VegetableMarketData extends Model
{
    use HasFactory;
    protected $table = "vegetable_market_data";

    protected $fillable = [
        'year', 'type', 'cate', 'plant_picture', 'total_average_price', 
        'total_yield', 'market', 'average_price', 'yield',
    ];
}
