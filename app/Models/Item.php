<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sale_price',
        'cost_price',
        'discount_by_percent',
        'discounted',
        'business_id'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
