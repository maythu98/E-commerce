<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => "Test Category 1",
        	'description' => "Lorem Ipsum",
        	'created_at' => null,
        	'updated_at' => null
        ]);

        DB::table('categories')->insert([
        	'name' => "Test Category 2",
        	'description' => "Lorem Ipsum",
        	'created_at' => null,
        	'updated_at' => null
        ]);

        DB::table('categories')->insert([
        	'name' => "Test Category 3",
        	'description' => "Lorem Ipsum",
        	'created_at' => null,
        	'updated_at' => null
        ]);
    }
}
