<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('day_description', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // Create the foreign key fields
            $table->integer('day_id')->unsigned();
            $table->integer('description_id')->unsigned();

            // Foreign keys
            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('description_id')->references('id')->on('descriptions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('day_description');
    }
}
