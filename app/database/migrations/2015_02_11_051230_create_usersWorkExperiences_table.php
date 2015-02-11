<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersWorkExperiences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('datefrom', 20);
			$table->string('dateto', 20);
			$table->string('position', 100);
			$table->string('department', 100);
			$table->string('salary', 100);
			$table->string('salarygrade', 100);
			$table->string('statusappointment', 100);
			$table->string('governmentservice', 10);
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
		Schema::drop('usersWorkExperiences');
	}

}
