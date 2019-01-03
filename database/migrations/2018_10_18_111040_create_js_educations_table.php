<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('job_seeker_id');
            $table->string('certificate_degree_name');
            $table->string('major');
            $table->string('institute_name');
            $table->string('state');
            $table->string('city');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('gaurd');
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
        Schema::dropIfExists('js_educations');
    }
}
