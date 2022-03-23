<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->text('description');
            $table->integer('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });

        DB::table('category')->insert([
            'title' => 'Phim Mới',
            'title_slug' => 'phim-moi',
            'description' => 'Phim mới cập nhận mỗi ngày, phim mới năm 2022',
            'status' => '1',
        ]);
        DB::table('category')->insert([
            'title' => 'Phim Lẻ',
            'title_slug' => 'phim-le',
            'description' => 'Phim lẻ cập nhận mỗi ngày, phim lẻ năm 2022',
            'status' => '1',
        ]);
        DB::table('category')->insert([
            'title' => 'Phim Bộ',
            'title_slug' => 'phim-bo',
            'description' => 'Phim bộ cập nhận mỗi ngày, phim bộ năm 2022',
            'status' => '1',
        ]);
        DB::table('category')->insert([
            'title' => 'Phim Chiếu Rạp',
            'title_slug' => 'phim-chieu-rap',
            'description' => 'Phim chiếu rạp cập nhận mỗi ngày, phim chiếu rạp năm 2022',
            'status' => '1',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
