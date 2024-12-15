<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained()->onDelete('cascade'); // Blog FK
            $table->foreignId('tag_id')->constrained()->onDelete('cascade'); // Tag FK
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_tag');
        Schema::dropIfExists('tags');
    }
}
