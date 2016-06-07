<?php

use Illuminate\Database\Seeder;
use CodeCommerce\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->truncate();

		$faker = Faker::create();

		User::create([
			'name' => 'giusepe',
			'email' => 'giusepe@r8digital.com.br',
			'password' => Hash::make(123),
		]);

		//foreach (range(1, 5) as $i) {
			//
			//            User::create([
			//                'name' => $faker->name(),
			//                'email' => $faker->email,
			//                'password' => Hash::make($faker->word)
			//            ]);
			//        }

//		factory('CodeComerce\User')->create([//cria so o meu user
//				'name'     => 'giusepe',
//				'email'    => 'giusepe@r8digital.com.br',
//				'password' => Hash::make(123)
//			]);
//
//		factory('CodeComerce\User', 10)->create();# cria varias de uma, no caso 10

		}

	}


