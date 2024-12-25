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
            $table->string('email');
            $table->string('shipping_country');
            $table->string('shipping_first_name');
            $table->string('shipping_last_name');
            $table->string('shipping_phone_number');
            $table->string('shipping_data_company');
            $table->string('shipping_data_address');
            $table->string('shipping_data_provinsi');
            $table->string('shipping_data_city');
            $table->string('shipping_data_zip');
            $table->string('bill_data_firstname')->nullable();
            $table->string('bill_data_lastname')->nullable();
            $table->string('bill_data_phone')->nullable();
            $table->string('bill_data_company')->nullable();
            $table->string('bill_data_address')->nullable();
            $table->string('bill_data_provinsi')->nullable();
            $table->string('bill_data_city')->nullable();
            $table->string('bill_data_zip')->nullable();
            $table->string('deliv_date');
            $table->string('deliv_schedule');
            $table->string('deliv_note')->nullable();
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
