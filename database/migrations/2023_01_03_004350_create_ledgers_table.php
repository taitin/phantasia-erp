<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('summary')->default('');
            $table->string('invoice')->nullable();
            $table->integer('income')->default('0');
            $table->integer('pay')->default('0');
            $table->string('catagory_id')->default('');
            $table->integer('balance')->default('0');
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
        Schema::dropIfExists('ledgers');
    }
}
