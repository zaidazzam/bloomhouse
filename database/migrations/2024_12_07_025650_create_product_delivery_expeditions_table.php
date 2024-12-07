<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDeliveryExpeditionsTable extends Migration
{
    public function up()
    {
        Schema::create('product_delivery_expeditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_product_id'); 
            $table->string('expedition_name');
            $table->integer('delivery_cost'); 
            $table->timestamps();

            $table->foreign('product_product_id')->references('id')->on('product_products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_delivery_expeditions');
    }
}
