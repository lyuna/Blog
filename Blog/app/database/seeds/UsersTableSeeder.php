<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

			User::create([
				'email'=>'756435141@qq.com',
				'password'=>Hash::make('12345678'),
				'username'=>'lyu',
			]);
	}

}