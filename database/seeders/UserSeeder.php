<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'intan',
            'email' => 'intans@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Nursafitri',
            'email' => 'nur@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Tia',
            'email' => 'tia@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Suci',
            'email' => 'suci@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Novi',
            'email' => 'novi@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
