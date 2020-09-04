<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('profession');
            $table->string('phone');
            $table->string('state');
            $table->string('profile');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('project1');
            $table->string('project2');
            $table->string('project3');
            $table->string('location1');
            $table->string('location2');
            $table->string('location3');
            $table->string('year1');
            $table->string('year2');
            $table->string('year3');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('talents');
    }
}
