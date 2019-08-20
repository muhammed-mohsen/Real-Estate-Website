<?php

use App\User;
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
        User::create([
            'name' => 'muhammed',
            'email' => 'muhammed.mohsen43@gmail.com',
            'password' => 'muhammed',
            'admin' => 1
        ]);
        User::create([
            'name' => 'mustafa',
            'email' => 'mustafa.mohsen43@gmail.com',
            'password' => 'mustafa',
            'admin' => 1,


        ]);
        User::create([
            'name' => 'saeed',
            'email' => 'saeed.muhammed@gmail.com',
            'password' => 'saaed',

        ]);
    }
}
