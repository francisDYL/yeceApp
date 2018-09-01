<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('type', ['student', 'professional']);
            $table->string('university')->nullable();
            $table->string('level_study_and_last_diploma')->nullable();
            $table->string('company')->nullable();
            $table->string('function')->nullable();
            $table->string('email')->unique();
            $table->enum('reason_for_join', ['I have a project','I propose a partnership', 'I want to be member', 'other']);
            $table->string('other_reason')->nullable();
            $table->string('phone_number');
            $table->string('nationality');
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
        Schema::dropIfExists('applicants');
    }
}
