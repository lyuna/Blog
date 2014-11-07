<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 5) as $index)
		{
			Article::create([
				'title'=>'fourth_title',
				'body'=>'fourth_body',
				'user_id'=>rand(1,5),
			]);
		}
	}

}