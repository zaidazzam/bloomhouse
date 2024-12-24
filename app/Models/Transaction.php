<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
            'email',
            'shipping_country',
            'shipping_first_name',
            'shipping_last_name',
            'shipping_phone_number',
            'shipping_data_company',
            'shipping_data_address',
            'shipping_data_provinsi',
            'shipping_data_city',
            'shipping_data_zip',
            'bill_data_firstname',
            'bill_data_lastname',
            'bill_data_phone',
            'bill_data_company',
            'bill_data_address',
            'bill_data_provinsi',
            'bill_data_city',
            'bill_data_zip',
            'deliv_date',
            'deliv_schedule',
            'total_amount',
            'payment_status',
            'midtrans_order_id',
            'midtrans_redirect_url',
            'deliv_note'
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
