<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    use HasFactory;

    protected $fillable = ['product_product_id', 'picture_path'];

    public function product()
    {
        return $this->belongsTo(ProductProduct::class, 'product_product_id');
    }
}
