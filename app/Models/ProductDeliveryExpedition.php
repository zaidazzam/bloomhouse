<?php

namespace App\Models;

use App\Models\ProductProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDeliveryExpedition extends Model
{
    use HasFactory;
    protected $fillable = ['product_product_id', 'expedition_name', 'delivery_cost', 'delivery_date'];

    public function product()
    {
        return $this->belongsTo(ProductProduct::class, 'product_product_id');
    }
}
