<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersEducations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('level', 50);
			$table->string('schoolname', 100);
			$table->string('degreecourse', 100);
			$table->string('yeargraduated', 20);
			$table->string('units', 20);
			$table->string('attendancefrom', 50);
			$table->string('attendanceto', 50);
			$table->string('awards', 100);
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
		Schema::drop('usersEducations');
	}

}
