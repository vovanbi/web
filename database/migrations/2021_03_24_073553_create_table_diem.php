<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem', function (Blueprint $table) {
            $table->id();
            $table->integer('sodaubai_id')->nullable();
            $table->integer('hoctap_id')->nullable();
            $table->integer('daoduc_id')->nullable();
            $table->integer('vanthemi_id')->nullable();
            $table->integer('hoatdongkhac_id')->nullable();
            $table->integer('lop_id')->nullable();
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
        Schema::dropIfExists('diem');
    }
}
