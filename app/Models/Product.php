<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'condition',
        'cat_id',
        'price',
        'type',
        'city',
        'area',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function keywords()
    {
        return $this->hasMany(ProductKeyword::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
}
