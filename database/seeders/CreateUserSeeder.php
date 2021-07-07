<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$user = [
			[
				'firstname' => 'Admin',
				'lastname' => 'Admin',
				'email' => 'admin@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin1',
				'lastname' => 'Admin1',
				'email' => 'admin1@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin2',
				'lastname' => 'Admin2',
				'email' => 'admin2@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin3',
				'lastname' => 'Admin3',
				'email' => 'admin3@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin4',
				'lastname' => 'Admin4',
				'email' => 'admin4@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin5',
				'lastname' => 'Admin5',
				'email' => 'admin5@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin6',
				'lastname' => 'Admin6',
				'email' => 'admin6@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin7',
				'lastname' => 'Admin7',
				'email' => 'admin7@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin8',
				'lastname' => 'Admin8',
				'email' => 'admin8@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin9',
				'lastname' => 'Admin9',
				'email' => 'admin9@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin10',
				'lastname' => 'Admin10',
				'email' => 'admin10@admin.com',
				'password' => bcrypt('1234')
			],
			[
				'firstname' => 'Admin11',
				'lastname' => 'Admin11',
				'email' => 'admin11@admin.com',
				'password' => bcrypt('1234')
			]


		];
		foreach ($user as $key => $value) {
			User::create($value);
		}
	}
}
