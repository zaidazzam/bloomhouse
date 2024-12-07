<?php

namespace App\Models;

use App\Models\ProductReview;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductDeliveryExpedition;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'product_price',
    ];
    
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function deliveryExpeditions()
    {
        return $this->hasMany(ProductDeliveryExpedition::class);
    }
}
