<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductKeyword extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'keywords',

    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
