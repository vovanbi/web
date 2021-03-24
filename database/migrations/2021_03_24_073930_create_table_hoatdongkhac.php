<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHoatdongkhac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoatdongkhac', function (Blueprint $table) {
            $table->id();
            $table->integer('diem')->nullable();
            $table->integer('diemtru')->nullable();
            $table->integer('solantru')->nullable();
            $table->integer('diemcong')->nullable();
            $table->integer('solancong')->nullable();
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
        Schema::dropIfExists('hoatdongkhac');
    }
}
