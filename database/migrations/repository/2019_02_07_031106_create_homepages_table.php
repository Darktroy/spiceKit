<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function(Blueprint $table)
        {
            $table->primary('homepageid');
            $table->timestamps();
            $table->string('p1')->nullable();
            $table->string('p2')->nullable();
            $table->string('title', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homepages');
    }
}
