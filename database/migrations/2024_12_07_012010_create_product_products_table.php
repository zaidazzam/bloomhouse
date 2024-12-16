<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductsTable extends Migration
{
    public function up()
    {
        Schema::create('product_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_description')->nullable();
            $table->decimal('product_stock',8,2)->nullable();
            $table->string('address')->nullable();
            $table->string('size')->nullable();
            $table->decimal('product_price',12,2)->nullable();
            $table->decimal('discount',8,2)->nullable();
            $table->string('consist_of')->nullable();
            $table->string('main_picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_products');
    }
}
