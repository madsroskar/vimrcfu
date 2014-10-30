<?php

use Faker\Factory as Faker;

class DotfilesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 3; $i++)
        {
            Dotfile::create([
                'name' => $faker->catchPhrase()
            ]);
        }
    }
}

