<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    public function up()
    {
            Schema::create('product_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique(); 
                $table->timestamps();
            });
    
            Schema::table('product_products', function (Blueprint $table) {
                $table->unsignedBigInteger('category_id')->nullable(); 
                $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('set null');
            });
        
    }


    public function down()
    {
        Schema::table('product_products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('product_categories');
    }
}
