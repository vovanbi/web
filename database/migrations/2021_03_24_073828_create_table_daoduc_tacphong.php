<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDaoducTacphong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daoduc_tacphong', function (Blueprint $table) {
            $table->id();
            $table->integer('diem')->nullable();
            $table->integer('diemtru')->nullable();
            $table->integer('solantru')->nullable();
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
        Schema::dropIfExists('daoduc_tacphong');
    }
}
