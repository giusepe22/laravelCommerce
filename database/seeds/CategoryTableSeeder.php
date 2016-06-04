<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('categories')->truncate();

		factory('CodeComerce\Category', 10)->create();

		#$faker = Faker::create();

		//        foreach (range(1, 15) as $i) {
		//
		//            Category::create([
		//                'name' => $faker->word(),
		//                'description' => $faker->sentence()
		//            ]);
		//        ?}
	}
}
