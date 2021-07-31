<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_votes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('music_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('music_id')->references('id')->on('music');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('music_votes');
    }
}
