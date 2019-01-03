<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('job_seeker_id');
            $table->string('certificate_name');
            $table->string('issu_Authority');
            $table->string('year');
            $table->string('description');
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
        Schema::dropIfExists('js_certificates');
    }
}
