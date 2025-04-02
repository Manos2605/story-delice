<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('difficulty')->default('Facile');
            $table->string('prep_time');
            $table->string('cook_time');
            $table->integer('servings')->default(4);
            $table->json('ingredients');
            $table->json('steps');
            $table->json('tips')->nullable();
            $table->string('author')->default('Story Délice');
            $table->string('author_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};