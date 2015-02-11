<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersQuestionairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersQuestionaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('qnumber', 5);
			$table->string('answer', 10);
			$table->string('details', 150);
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
		Schema::drop('usersQuestionaires');
	}

}
