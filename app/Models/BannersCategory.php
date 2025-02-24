<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannersCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner1',
        'banner2',
        'banner3',
        'category1',
        'category2',
        'category3'
    ];
}
