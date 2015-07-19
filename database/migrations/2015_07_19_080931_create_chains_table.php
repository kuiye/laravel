<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chains', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('upid');
            $table->integer('sid');
            $table->integer('static');
            $table->integer('upkey');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chains');
	}

}
