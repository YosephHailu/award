<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_votes', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('award_candidate_id');
            $table->unsignedBigInteger('voter_id');
            $table->unsignedBigInteger('award_id');

            $table->foreign('award_id')->references('id')->on('awards');
            $table->foreign('voter_id')->references('id')->on('users');
            $table->foreign('award_candidate_id')->references('id')->on('award_candidates');
            
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
        Schema::dropIfExists('candidate_votes');
    }
}
