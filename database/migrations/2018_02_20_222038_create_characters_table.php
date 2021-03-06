<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->integer('base_str');
            $table->integer('base_con');
            $table->integer('base_int');
            $table->integer('base_mnd');
            $table->integer('base_lck');
            $table->unsignedInteger('dlc_id')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('dlc_id')->references('id')->on('dlcs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
