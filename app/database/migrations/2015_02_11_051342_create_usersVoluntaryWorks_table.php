<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersVoluntaryWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersVoluntaryWorks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('organization', 100);
			$table->string('datefrom', 20);
			$table->string('dateto', 20);
			$table->string('numberofhours', 10);
			$table->string('position', 100);
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
		Schema::drop('usersVoluntaryWorks');
	}

}
