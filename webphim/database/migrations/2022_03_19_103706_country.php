<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Country extends Migration
{
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->text('description');
            $table->integer('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        DB::table('country')->insert([
            'title' => 'Việt nam',
            'title_slug' => 'viet-nam',
            'description' => 'Phim Việt nam cập nhận mỗi ngày, phim Việt nam năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Ấn Độ',
            'title_slug' => 'an-do',
            'description' => 'Phim Ấn Độ cập nhận mỗi ngày, phim Ấn Độ năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Mỹ',
            'title_slug' => 'my',
            'description' => 'Phim Mỹ cập nhận mỗi ngày, phim Mỹ năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Hồng Kông',
            'title_slug' => 'hong-kong',
            'description' => 'Phim Hồng Kông cập nhận mỗi ngày, phim Hồng Kông năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Nhật Bản',
            'title_slug' => 'nhat-ban',
            'description' => 'Phim Nhật Bản cập nhận mỗi ngày, phim Nhật Bản năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Trung Quốc',
            'title_slug' => 'trung-quoc',
            'description' => 'Phim Trung Quốc cập nhận mỗi ngày, phim Trung Quốc năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Hàn Quốc',
            'title_slug' => 'han-quoc',
            'description' => 'Phim Hàn Quốc cập nhận mỗi ngày, phim Hàn Quốc năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Đài Loan',
            'title_slug' => 'dai-loan',
            'description' => 'Phim Đài Loan cập nhận mỗi ngày, phim Đài Loan năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Thái Lan',
            'title_slug' => 'thai-lan',
            'description' => 'Phim Thái Lan cập nhận mỗi ngày, phim Thái Lan năm 2022',
            'status' => '1',
        ]);
        DB::table('country')->insert([
            'title' => 'Philippin',
            'title_slug' => 'philippin',
            'description' => 'Phim Philippin cập nhận mỗi ngày, phim Philippin năm 2022',
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
        Schema::dropIfExists('country');
    }
}
