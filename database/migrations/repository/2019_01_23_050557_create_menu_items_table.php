<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function(Blueprint $table)
        {
            $table->increments('menuItemsId');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title', 255);
            $table->string('menutypeId')->nullable();
            $table->string('itemDescription')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_items');
    }
}
