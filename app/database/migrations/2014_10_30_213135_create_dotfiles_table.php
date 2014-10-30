<?php

use Illuminate\Database\Migrations\Migration;

class CreateDotfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dotfiles', function ($t)
        {
            $t->create();

            $t->increments('id');
            $t->string('name');

            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dotfiles');
    }

}
