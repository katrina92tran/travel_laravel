<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create table users
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('name',255);
			$table->string('username',255);
			$table->string('email',255);
			$table->string('password',255);
			$table->string('address');
			$table->string('avatar',255);
			$table->boolean('active');
			$table->string('code');
			$table->rememberToken();
		});

		//create table roles
		Schema::create('roles',function($table){
			$table->increments('id');
			$table->string('name',255);
		});

		//create table role-user
		Schema::create('role_user',function($table){
			$table->integer('role_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('roles');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});

		//create table role-user
		Schema::create('categories',function($table){
			$table->increments('id');
			$table->string('name',255);
		});

		//create table posts
		Schema::create('posts',function($table){
			$table->increments('id');
			$table->string('title',255);
			$table->string('description',255);
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->text('content');
			$table->string('thumbnail',255);
			$table->string('slider',255);
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('view_count');
			$table->integer('view_comment');
			$table->timestamps();
		});

		//create table comment
		Schema::create('comments',function($table){
			$table->increments('id');
			$table->string('name',255);
			$table->string('email',255);
			$table->text('content');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');
			$table->integer('comment_id');
			$table->timestamps();
		});

		//create table subscribes
		Schema::create('subscribes',function($table){
			$table->increments('id');
			$table->string('name',255);
			$table->string('email',255);
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('roles');
		Schema::drop('role_user');
		Schema::drop('categories');
		Schema::drop('posts');
		Schema::drop('comments');
		Schema::drop('subscribes');
	}

}
