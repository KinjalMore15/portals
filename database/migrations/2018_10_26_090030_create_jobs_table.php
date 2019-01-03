<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employer_id');
            $table->bigInteger('company_id');
            $table->bigInteger('industry_id');
            $table->bigInteger('job_title');
            $table->bigInteger('job_description');
            $table->string('qualification');
            $table->string('experience');
            $table->string('experience');
            $table->string('salary');
            $table->smallInteger('is_pay');
            $table->smallInteger('is_featured');
            $table->integer('zip');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('last_date');
            $table->string('created_date');
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
        Schema::dropIfExists('jobs');
    }
}
