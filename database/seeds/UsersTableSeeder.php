<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'Luis Fernando',
            'email' => 'luis.mayta@gmail.com',
            'password' => '321654987',
            'remember_token'=>str_random(10)
            ]);
    }
}
