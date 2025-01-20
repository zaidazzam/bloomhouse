<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingDelivery extends Model
{
    use HasFactory;

    protected $table = "tracking_delivery";

    protected $fillable = [
        "transaction_id",
        "status"
    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

}
