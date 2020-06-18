<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute_name', 255);
            $table->unsignedInteger('institute_country');
            $table->string('institute_address', 255)->nullable();
            $table->string('institute_website', 255);
            $table->string('contact_person_name', 255);
            $table->string('phone_number', 128);
            $table->string('email', 255);
            $table->string('alternative_email', 255)->nullable();
            $table->tinyInteger('sponsorship')->default(0);
            $table->string('sponsorship_package', 125)->nullable();
            $table->tinyInteger('meeting')->default(0);
            $table->dateTime('meeting_time')->nullable();
            
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
        Schema::dropIfExists('institutions');
    }
}
