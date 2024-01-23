<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('')->comment('標題');
            $table->text('description')->comment('簡介');
            $table->text('keywords')->comment('關鍵字');
            $table->text('og_image')->comment('縮圖');
            $table->text('secs')->comment('橫幅');
            $table->string('footers')->default('')->comment('頁尾橫幅');
            $table->string('content')->default('')->comment('內文');
            $table->string('start')->default('')->comment('開始顯示時間');
            $table->string('end')->default('')->comment('結束顯示時間');
            $table->string('wait')->default('')->comment('未開放文字');
            $table->string('iframe')->default('')->comment('外嵌框架網址');
            $table->integer('iframe_height')->comment('外嵌框架高度');
            $table->string('slug')->unique()->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activies');
    }
}
