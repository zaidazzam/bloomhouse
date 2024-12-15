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
        'product_description',
        'product_stock',
        'address',
        'product_price',
        'discount',
        'consist_of',
        'main_picture',
        'category_id'
    ];
    
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function pictures()
    {
        return $this->hasMany(ProductPicture::class, 'product_product_id');
    }
    
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function deliveryExpeditions()
    {
        return $this->hasMany(ProductDeliveryExpedition::class);
    }
}
