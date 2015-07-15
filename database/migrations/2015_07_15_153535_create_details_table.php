<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('details', function(Blueprint $table)
		{
			$table->increments('id');//id
            $table->string('type');//类型
            $table->string('cname');//公司名称
            $table->string('ctype');//行业
            $table->text('caddress');//地址
            $table->string('image');//图片
            $table->string('cnumber');//营业执照
            $table->string('ctel');//营业执照
            $table->integer('user_id');//所属用户id
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
		Schema::drop('details');
	}

}
