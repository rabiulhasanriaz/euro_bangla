<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('menu_id');
            $table->string('title', 128);
            $table->string('slug', 128);
            $table->longText('content')->nullable();

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
        Schema::dropIfExists('config_sub_menus');
    }
}
