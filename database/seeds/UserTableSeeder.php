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
            'password' => bcrypt(
                'muhammed'
            ),
            'image' => 'user/download.png',
            'admin' => 1
        ]);
        User::create([
            'name' => 'mustafa',
            'email' => 'mustafa.mohsen43@gmail.com',
            'password' => bcrypt('mustafa'),
            'admin' => 1,
            'image' => 'user/download.png',


        ]);
        User::create([
            'name' => 'saeed',
            'email' => 'saeed.muhammed@gmail.com',
            'password' => bcrypt('saaed'),
            'image' => 'user/download.png'

        ]);
    }
}
