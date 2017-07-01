<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = Catalogo::idroot();
        factory(App\User::class)->create([
            'name' => 'Luis Fernando',
            'email' => 'luis.mayta@gmail.com',
            'password' => '321654987',
            'idrole' => $root->id,
            'menu' => 'menu.sider-admin',
            'activo'=> true,
            ]);
        factory(App\User::class)->create([
            'name' => 'Jorge Arturo',
            'email' => 'lmayta@admisionuni.edu.pe',
            'password' => '321654987',
            'idrole' => IdRole('admin'),
            'menu' => 'menu.sider-admin',
            ]);
        factory(App\User::class)->create([
            'name' => 'Henrry William',
            'email' => 'I00pre_xto@hotmail.com',
            'password' => '321654987',
            'idrole' => IdRole('role1'),
            'menu' => 'menu.sider-admin',
            ]);
        //factory(App\User::class,20)->create();
    }
}
