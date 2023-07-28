<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubpoenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpoenas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->default('')->comment('編號');
            $table->integer('user_id')->comment('使用者');
            $table->integer('borrow')->comment('借')->default(0);
            $table->integer('loan')->comment('貸')->default(0);

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
        Schema::dropIfExists('subpoenas');
    }
}
