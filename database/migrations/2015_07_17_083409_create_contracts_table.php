<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contracts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('cname');//公司名称
            $table->string('type');//种类
            $table->text('Content');//内容
            $table->string('ckey');//电子签名
            $table->string('cnumber');//合同编号
            $table->string('state');//合同编号
            //$table->integer('priceid');//服务价格
            $table->date('starttime');//生效日期
            $table->date('endtime');//结束日期
            $table->integer('user_id');//所属用户id
            $table->string('dkey');
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
		Schema::drop('contracts');
	}

}
