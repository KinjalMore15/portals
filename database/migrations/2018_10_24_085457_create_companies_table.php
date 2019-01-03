<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('industry_id');
            $table->string('company_name');
            $table->string('company_slug');
            $table->string('company_email');
            $table->string('ceo_name');
            $table->smallInteger('owner_type');
            $table->text('company_description');
            $table->smallInteger('num_of_office');
            $table->string('website');
            $table->date('established_in');
            $table->smallInteger('company_type');
            $table->string('company_fax');
            $table->integer('company_phone');
            $table->string('company_logo');
            $table->string('company_folder');
            $table->integer('company_zip');
            $table->string('company_state');
            $table->string('company_city');
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
        Schema::dropIfExists('companies');
    }
}
