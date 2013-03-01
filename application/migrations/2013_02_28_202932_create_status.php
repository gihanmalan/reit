<?php

class Create_Status {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('user_status', function($table) {
		    $table->increments('id');
		    $table->integer('user_id');
		    $table->string('status');
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
		Schema::drop('user_status');
	}

}