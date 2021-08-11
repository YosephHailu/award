<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('description');
            $table->integer('allowed_no_of_votes')->default(1);

            $table->string('logo')->default('placeholder.png');
            $table->string('cover_img')->default('placeholder.png');
            
            $table->unsignedBigInteger('award_type_id');

            $table->foreign('award_type_id')->references('id')->on('award_types');
            
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
        Schema::dropIfExists('awards');
    }
}
