<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender', ['UNKNOWN', 'MALE', 'FEMALE'])->default('UNKNOWN');
            $table->string('telephone')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('next_of_kin_telephone')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('genotype')->nullable();
            $table->unsignedInteger('user_id')->nullable()->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
