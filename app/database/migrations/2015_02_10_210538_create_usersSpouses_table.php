<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersSpousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersspouses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('firstname', 60);
			$table->string('lastname', 60);
			$table->string('middlename', 60);
			$table->string('occupation', 160);
			$table->string('employername', 160);
			$table->string('telno', 10);
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
		Schema::drop('usersSpouses');
	}

}
