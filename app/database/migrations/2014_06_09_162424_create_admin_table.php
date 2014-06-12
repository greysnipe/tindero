<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function($table)
	    {
	        $table->increments('id');
	        $table->integer('admin_id')->unsigned();
	        $table->string('name');
	       	$table->foreign('admin_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade');
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
		Schema::drop('admin');
	}

}
