<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class CreateTodolistSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$todos = [

			[
				'title' => 'test',
				'completed' => 0,
				'user_id' => 1,
				'created_at' => '2021-07-01 22:28'
			],
			[
				'title' => 'test1',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:30'
			],
			[
				'title' => 'test2',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:31'
			],
			[
				'title' => 'test3',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:33'

			],
			[
				'title' => 'test4',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:35'

			],
			[
				'title' => 'test5',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:37'

			],
			[
				'title' => 'test6',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:38'

			],
			[
				'title' => 'test7',
				'completed' => 0,
				'user_id' => 2,
				'created_at' => '2021-07-01 22:39'


			]




		];
		foreach ($todos as $key => $value) {

			Todo::create($value);
		}
	}
}
