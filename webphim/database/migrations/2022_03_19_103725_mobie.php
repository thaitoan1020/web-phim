<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mobie extends Migration
{
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('genre_id')->constrained('genre');
            $table->foreignId('country_id')->constrained('country');
            $table->string('title'); 
            $table->string('title_en');
            $table->string('title_slug');
            $table->text('description');
            $table->integer('resolution');
            $table->integer('status');
            $table->integer('phim_hot');
            $table->string('image');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}
