<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Episode extends Migration
{
    public function up()
    {
        Schema::create('episode', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movie');
            $table->string('linkphim');
            $table->integer('episode');
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
        Schema::dropIfExists('episode');
    }
}
