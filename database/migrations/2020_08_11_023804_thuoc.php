<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thuoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuoc', function ($table) {
            $table->bigIncrements('id'); //Tự tăng, khóa chính
            $table->string('tenthuoc');
            $table->string('congdung');
            $table->timestamps(); //Tự cập nhật thời gian
            }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
