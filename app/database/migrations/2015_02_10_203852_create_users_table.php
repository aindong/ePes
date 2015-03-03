<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no')->unique();
			$table->integer('department_id');
			$table->string('position', 100);
			$table->integer('role_id');
			$table->string('password');
            $table->string('lockpds', 10);
            $table->integer('registered');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
