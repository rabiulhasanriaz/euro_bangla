<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name',100);
            $table->string('represented_organization',100)->nullable();
            $table->string('sector',50);
            $table->string('email',70)->nullable();
            $table->string('phone_number',15);
            $table->string('whatsapp_number',20)->nullable();
            $table->integer('agreement')->default(0);
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor');
    }
}
