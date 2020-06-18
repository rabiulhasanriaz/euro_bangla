<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 255);
            $table->date('date_of_birth');
            $table->string('city_of_residence', 255);
            $table->string('institute', 255);
            $table->string('phone_number', 64);
            $table->string('whatsapp_number', 64);
            $table->string('email_address', 128);
            $table->string('academic_interest', 255);
            $table->string('preferred_course', 255);
            $table->string('cv', 255);
            $table->tinyInteger('agreement_promotional_purpose');

            $table->tinyInteger('status')->default('1')->comment('1=active, 0=in-active');
            $table->timestamp('created_at')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
