<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->comment('日期');
            $table->string('summary')->default('')->comment('摘要');
            $table->integer('income')->default('0')->comment('收入');
            $table->integer('pay')->default('0')->comment('支出');
            $table->string('account_id')->default('')->comment('帳戶');
            $table->text('comment')->nullable()->comment('備註');
            $table->string('ledger_id')->default('');
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
        Schema::dropIfExists('cash_flows');
    }
}
