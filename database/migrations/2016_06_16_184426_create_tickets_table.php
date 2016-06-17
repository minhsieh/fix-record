<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id'); //客戶
            $table->integer('category_id'); //類別

            $table->string('obj_model')->nullable(); //送修物件型號
            $table->string('obj_problem')->nullable(); //送修物件故障問題
            $table->string('obj_custom')->nullable(); //客製化需求
            $table->string('obj_sn')->nullable(); //送修物件序號

            $table->integer('fee'); //本次維修費用
            $table->datetime('time_start'); //送修時間
            $table->datetime('tiem_end'); //預計時間
            $table->text('comment'); //註解

            $table->integer('status'); //狀態 0:等待pending 1:處理中processed 2:交付deliver 3:完成success

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
