<?php

use Illuminate\Database\Seeder;
use App\Owner;
use App\Animal;



class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Owner::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('owners')->truncate();
        DB::table('animals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        // And now, let's create a few owners in our database:
        for ($i = 0; $i < 50; $i++) {
            Owner::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'address_1' => $faker->streetAddress,
                'address_2' => $faker->secondaryAddress,
                'town' => $faker->city,
                'postcode' => $faker->postcode,
                'telephone' => $faker->phoneNumber,
            ]);
        }
    }
}
