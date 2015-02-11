<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersCivilServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersCivilServices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('careerservice', 100);
			$table->string('rating', 100);
			$table->string('examinationdate', 20);
			$table->string('examinationplace', 100);
			$table->string('licensenumber', 100);
			$table->string('licensereleasedate', 20);
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
		Schema::drop('usersCivilServices');
	}

}
