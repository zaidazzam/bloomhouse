<?php

namespace App\Models;

use App\Models\ProductProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductReview extends Model
{
    use HasFactory;
    protected $fillable = ['product_product_id', 'rating', 'review'];

    public function product()
    {
        return $this->belongsTo(ProductProduct::class, 'product_product_id');
    }
}
