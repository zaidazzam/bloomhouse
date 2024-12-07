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
            $table->decimal('product_price',8,2);
            $table->string('product_description')->nullable();
            $table->string('product_return_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_products');
    }
}
