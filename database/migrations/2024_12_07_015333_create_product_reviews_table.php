<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_product_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('rating'); // Rating 1-5
            $table->text('review');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('product_reviews');
    }
}
