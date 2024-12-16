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
        'size',
        'product_price',
        'discount',
        'consist_of',
        'main_picture'
    ];

    public function category()
    {
        return $this->belongsToMany(ProductCategory::class,'product_categ',
        'product_product_id',
        'product_category_id');
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
