<?php

class Create_Friends {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('friends', function($table) {
		    $table->increments('id');
		    $table->integer('user_id');
		    $table->integer('following');
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