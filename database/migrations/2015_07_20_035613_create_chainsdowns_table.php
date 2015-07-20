<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChainsdownsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chainsdowns', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('cid');//上级ID
            $table->integer('sid');//商家ID
            $table->String('ckey');//密匙
            $table->integer('static');//状态
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
		Schema::drop('chainsdowns');
	}

}
