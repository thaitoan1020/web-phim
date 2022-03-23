<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Genre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->text('description');
            $table->integer('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        DB::table('genre')->insert([
            'title' => 'Tâm Lý',
            'title_slug' => 'tam-ly',
            'description' => 'Phim Tâm Lý cập nhận mỗi ngày, phim Tâm Lý năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Hành động',
            'title_slug' => 'hanh-dong',
            'description' => 'Phim Hành động cập nhận mỗi ngày, phim Hành động năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Viễn Tưởng',
            'title_slug' => 'vien-tuong',
            'description' => 'Phim Viễn Tưởng cập nhận mỗi ngày, phim Viễn Tưởng năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Hoạt Hình',
            'title_slug' => 'hoat-hinh',
            'description' => 'Phim Hoạt Hình cập nhận mỗi ngày, phim Hoạt Hình năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Kinh Dị',
            'title_slug' => 'kinh-di',
            'description' => 'Phim Kinh Dị cập nhận mỗi ngày, phim Kinh Dị năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Hài Hước',
            'title_slug' => 'hai-huoc',
            'description' => 'Phim Hài Hước cập nhận mỗi ngày, phim Hài Hước năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Hình Sự',
            'title_slug' => 'hinh-su',
            'description' => 'Phim Hình Sự cập nhận mỗi ngày, phim Hình Sự năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Võ Thuật',
            'title_slug' => 'vo-thuat',
            'description' => 'Phim Võ Thuật cập nhận mỗi ngày, phim Võ Thuật năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Cổ Trang',
            'title_slug' => 'co-trang',
            'description' => 'Phim Cổ Trang cập nhận mỗi ngày, phim Cổ Trang năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Chiến Tranh',
            'title_slug' => 'chien-trang',
            'description' => 'Phim Chiến Tranh cập nhận mỗi ngày, phim Chiến Tranh năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Phim Ma',
            'title_slug' => 'phim-ma',
            'description' => 'Phim Phim Ma cập nhận mỗi ngày, phim Phim Ma năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Tình Cảm',
            'title_slug' => 'tinh-cam',
            'description' => 'Phim Tình Cảm cập nhận mỗi ngày, phim Tình Cảm năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Thể Thao & Âm Nhạc',
            'title_slug' => 'the-thao-&-am-nhac',
            'description' => 'Phim Thể Thao & Âm Nhạc cập nhận mỗi ngày, phim Thể Thao & Âm Nhạc năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Thần Thoại',
            'title_slug' => 'than-thoai',
            'description' => 'Phim Thần Thoại cập nhận mỗi ngày, phim Thần Thoại năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Tài Liệu',
            'title_slug' => 'tai-lieu',
            'description' => 'Phim Tài Liệu cập nhận mỗi ngày, phim Tài Liệu năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Phiêu Lưu',
            'title_slug' => 'phieu-luu',
            'description' => 'Phim Phiêu Lưu cập nhận mỗi ngày, phim Phiêu Lưu năm 2022',
            'status' => '1',
        ]);
        DB::table('genre')->insert([
            'title' => 'Gia Đình',
            'title_slug' => 'gia-dinh',
            'description' => 'Phim Gia Đình cập nhận mỗi ngày, phim Gia Đình năm 2022',
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
        Schema::dropIfExists('genre');
    }
}
