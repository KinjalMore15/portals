<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email',100)->unique();
            $table->integer('phone_number');
            $table->string('password');
            $table->string('gender');
            $table->binary('photo');
            $table->integer('zipcode');           
            $table->string('state');
            $table->string('city');
            $table->date('dob');
            $table->string('wrk_auth');         
            $table->smallInteger('sms_notification');
            $table->smallInteger('email_notification');
            $table->smallInteger('email_verification');
            $table->dateTime('reg_date');
            $table->ipAddress('reg_ip');
            $table->string('gmail_auth_code');
            $table->string('lkd_auth_code');
            $table->tinyInteger('paid');
            $table->smallInteger('is_active');
            $table->smallInteger('is_relocate');
            $table->smallInteger('is_annually');
            $table->smallInteger('view_count');            
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
        Schema::dropIfExists('job_seekers');
    }
}
