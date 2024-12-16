<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
    ];

    public function products()
    {
        return $this->belongsToMany(ProductProduct::class, 'product_categ', 
        'product_product_id', 
        'product_category_id');
    }
    
}
