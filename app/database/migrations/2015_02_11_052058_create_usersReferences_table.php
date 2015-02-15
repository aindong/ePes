<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersreferences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('name', 150);
			$table->string('address', 200);
			$table->string('telno', 20);
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
		Schema::drop('usersReferences');
	}

}
