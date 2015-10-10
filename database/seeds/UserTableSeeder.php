<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'name' => 'Leonardo Herrera',
            'email' => 'lherrera@aiesec.net',
            'password' => bcrypt('leo123'),
        ]);

          DB::table('users')->insert([
            'name' => 'Daniela Martinez',
            'email' => 'dmartinez@aiesec.net',
            'password' => bcrypt('dani123'),
        ]);

    }
}
