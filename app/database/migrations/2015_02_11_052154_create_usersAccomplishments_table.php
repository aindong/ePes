<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersAccomplishmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersAccomplishments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->timestamp('datefrom');
			$table->timestamp('dateto');
			$table->string('accomplishment');
			$table->softDeletes();
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
		Schema::drop('usersAccomplishments');
	}

}
