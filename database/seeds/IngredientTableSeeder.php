<?php

use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'name' => 'Rice',
                'description' => 'Just a rice. Please do not overcook it!',
                'category' => 'oats',
                'price_per_gram' => 0.007,
            ],
        ]);
    }
}
