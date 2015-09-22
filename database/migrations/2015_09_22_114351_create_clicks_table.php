<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clicks', function (Blueprint $table) {
            $table->increments('click_id');
            $table->dateTime('created_at');
            $table->integer('short_link_id')->unsigned();
                $table->foreign('short_link_id')->references('short_link_id')->on('ShortLinks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Clicks');
    }
}
