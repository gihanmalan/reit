<?php

class Create_Blog {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('user_blog', function($table) {
		    $table->increments('id');
		    $table->integer('user_id');
		    $table->string('title');
		    $table->text('post');
		    $table->timestamp('created_at');   
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('user_blog');
	}

}