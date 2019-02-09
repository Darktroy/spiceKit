<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function(Blueprint $table)
        {
            $table->increments('submenuid');
            $table->timestamps();
            $table->integer('menu_id')->unsigned()->nullable()->index();
            $table->string('submenu_name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('submenus');
    }
}
