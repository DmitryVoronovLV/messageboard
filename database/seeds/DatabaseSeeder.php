<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert([
        'name' => 'Abuzer Yakaryilmaz',
        'email' => 'abuzer@lu.lv',
        'password' => bcrypt('3rdlab'),
        ]);		
        DB::table('countries')->insert([
        'country_name' => 'Latvia',
        'country_code' => 'LV',
        ]);
        DB::table('countries')->insert([
        'country_name' => 'Finland',
        'country_code' => 'FI',
        ]);
        DB::table('countries')->insert([
        'country_name' => 'Brazil',
        'country_code' => 'BR',
        ]);

    }
}
