<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            // Auto incrementing id column
            $table->increments('id');
            // Timestamp generates a created_at and update_at column to keep track of changes to rows
            $table->timestamps();

            $table->date('date');
            $table->unsignedSmallInteger('moderate_activity');
            $table->unsignedSmallInteger('vigorous_activity');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}
