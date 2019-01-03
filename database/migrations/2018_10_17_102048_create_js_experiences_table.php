<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('job_seeker_id');
            $table->date('statrt_date');
            $table->date('end_date');
            $table->string('job_title');
            $table->string('compnay_name');
            $table->string('industry_type');
            $table->string('city');
            $table->string('State');
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
        Schema::dropIfExists('js_experiences');
    }
}
