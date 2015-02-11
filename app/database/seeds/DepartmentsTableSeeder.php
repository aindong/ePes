<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class DepartmentsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			Department::create([
				'name' => 'Human Resources'
			]);
		//}
	}

}