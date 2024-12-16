<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostageRule extends Model
{
    use HasFactory;
    protected $fillable = [
        'rule_postage',
        'category',
        'price'
    ];
}
