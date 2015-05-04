<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create table slider
		Schema::create('slider',function($table){
			$table->increments('id');
			$table->string('name',255);
			$table->string('link',255);
			$table->string('pos',255);
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
		//drop table slider
		Schema::drop('slider');
	}

}
