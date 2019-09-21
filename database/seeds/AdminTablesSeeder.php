<?php

use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('ja_JP');
        $date = \Carbon\Carbon::now();
        $data = [
            'admin_code' => $faker->randomNumber(),
            'name' => $faker->name,
            'password' => $faker->password,
            'role' => $faker->randomDigitNotNull
        ];
        DB::table('admin')->insert('$data');
    }
}
