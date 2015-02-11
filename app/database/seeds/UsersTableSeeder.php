<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		User::create([
			'employee_no' 	=> 'hraccount',
			'department_id'	=> '1',
			'role_id'		=> '1',
			'password'		=> 'admin'
		]);
	}

}