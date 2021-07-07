<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\logfilelogin;

class CreateLogfileloginSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$logfilelogin = [

			[

				'logdate' => '2021-07-07 20:34:51',
				'statuslog' => 'เข้าสู่ระบบ',
				'user_id' => '1'
			],
			[

				'logdate' => '2021-07-07 20:37:51',
				'statuslog' => 'ออกระบบ',
				'user_id' => '2'
			],
			[

				'logdate' => '2021-07-07 20:40:51',
				'statuslog' => 'เข้าสู่ระบบ',
				'user_id' => '3'
			],
			[

				'logdate' => '2021-07-07 20:45:51',
				'statuslog' => 'ออกระบบ',
				'user_id' => '3'
			], [

				'logdate' => '2021-07-07 20:50:51',
				'statuslog' => 'เข้าสู่ระบบ',
				'user_id' => '3'
			], [

				'logdate' => '2021-07-07 20:55:51',
				'statuslog' => 'ออกระบบ',
				'user_id' => '4'
			]


		];
		foreach ($logfilelogin as $key => $value) {


			logfilelogin::create($value);
		}
	}
}
