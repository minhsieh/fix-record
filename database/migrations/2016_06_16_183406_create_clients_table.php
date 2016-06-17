<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name')->nullable(); //名
            $table->string('last_name')->nullable(); //姓
            $table->string('phone')->nullable(); //連絡電話
            $table->string('email')->nullable(); //email
            $table->string('address')->nullable(); //地址
            $table->boolean('sex'); //性別 0:女female 1:男male
            $table->string('vip_code')->nullable(); //vip卡號
            $table->text('comment')->nullable();

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
        Schema::drop('clients');
    }
}
