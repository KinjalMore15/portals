<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsAdditionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_additional_details', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('job_seeker_id');
            $table->longText('summary');
            $table->string('languages');
            $table->string('interest');
            $table->string('certificates');
            $table->string('fb_link');
            $table->string('gmail_link');
            $table->string('tweet_link');
            $table->string('salary');
            $table->string('keywords');
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
        Schema::dropIfExists('js_additional_details');
    }
}
