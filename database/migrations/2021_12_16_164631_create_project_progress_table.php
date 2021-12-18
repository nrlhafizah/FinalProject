<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_progress', function (Blueprint $table) {
            $table->bigIncrements('progress_id')->unsigned();
            $table->foreignId('project_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            $table->integer('cost');
            $table->string('client');
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
        Schema::dropIfExists('project_progress');
    }
}
