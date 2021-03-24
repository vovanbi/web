<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('slug')->index();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('active')->index()->default(1);
            $table->string('title')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('view')->default(0);

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
        Schema::dropIfExists('tintuc');
    }
}
