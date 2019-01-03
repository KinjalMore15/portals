<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('job_seeker_id');
            $table->smallInteger('is_uploaded_resume');
            $table->string('file_name');
            $table->string('resume_name');
            $table->date('date');
            $table->smallInteger('is_default_resume');
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
        Schema::dropIfExists('js_resumes');
    }
}
