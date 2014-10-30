<?php

use Illuminate\Database\Migrations\Migration;

class AddDotfileIdToSnippetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('snippets', function ($t)
        {
            $t->integer('dotfile_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('snippets', function ($t)
        {
            $t->dropColumn('dotfile_id');
        });
	}

}
