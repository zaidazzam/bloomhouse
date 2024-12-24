<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->strig('email');
            $table->strig('shipping_country');
            $table->strig('shipping_first_name');
            $table->strig('shipping_last_name');
            $table->strig('shipping_phone_number');
            $table->strig('shipping_data_company');
            $table->strig('shipping_data_address');
            $table->strig('shipping_data_provinsi');
            $table->strig('shipping_data_city');
            $table->strig('shipping_data_zip');
            $table->strig('bill_data_firstname')->nullable();
            $table->strig('bill_data_lastname')->nullable();
            $table->strig('bill_data_phone')->nullable();
            $table->strig('bill_data_company')->nullable();
            $table->strig('bill_data_address')->nullable();
            $table->strig('bill_data_provinsi')->nullable();
            $table->strig('bill_data_city')->nullable();
            $table->strig('bill_data_zip')->nullable();
            $table->strig('deliv_date');
            $table->strig('deliv_schedule');
            $table->strig('deliv_note')->nullable();
            $table->decimal('total_amount', 15, 2)->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->string('midtrans_order_id')->nullable();
            $table->string('midtrans_redirect_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
