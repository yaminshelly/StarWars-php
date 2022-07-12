<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarWarsPHPproject1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_wars_p_h_pproject1s', function (Blueprint $table) {
            $table->name_of_movie();
            $table->year_of_movie();
            $table->picture_of_movie();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('star_wars_p_h_pproject1s');
    }
}
