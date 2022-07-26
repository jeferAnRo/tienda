<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'jeferson',
            'email' =>'jefersonangulo854@gmail.com',
            'password' =>bcrypt('jefersonangulo')

        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}
