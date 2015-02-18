<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersBiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersbios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_no');
			$table->string('firstname', 60);
			$table->string('lastname', 60);
			$table->string('middlename', 60);
			$table->string('nameextension', 60);
			$table->string('birthdate', 60);
			$table->string('birthplace', 60);
			$table->string('gender', 10);
			$table->string('residentialaddress', 200);
			$table->string('permanentaddress', 200);
			$table->string('civilstatus', 20);
			$table->string('citizenship', 20);
			$table->string('height', 10);
			$table->string('weight', 10);
			$table->string('bloodtype', 10);
			$table->string('gsis', 60);
			$table->string('pagibig', 60);
			$table->string('philhealth', 60);
			$table->string('sss', 60);
			$table->string('telno', 60);
			$table->string('celno', 60);
			$table->string('email', 60);
			$table->string('agencyemployeeno', 60);
			$table->string('tin', 60);
			$table->string('fathername', 60);
			$table->string('mothername', 60);
            $table->string('spousefirstname', 60);
            $table->string('spouselastname', 60);
            $table->string('spousemiddlename', 60);
            $table->string('spouseoccupation', 160);
            $table->string('spouseemployername', 160);
            $table->string('spousetelno', 10);
			$table->string('image', 60);
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
		Schema::drop('usersBios');
	}

}
