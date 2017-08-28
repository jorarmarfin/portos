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
        factory(App\User::class)->create([
            'name' => 'Luis Fernando',
            'username' => 'lmayta',
            'email' => 'luis.mayta@gmail.com',
            'password' => '321654987',
            'idrole' => Catalogo::IdCatalogo('ROLES','C','root'),
            'activo' => true,
            ]);
        factory(App\User::class)->create([
            'name' => 'Lucy Sanchez',
            'username' => 'lsanchez',
            'email' => 'lucy.sanchez@gmail.com',
            'password' => '321654987',
            'idrole' => Catalogo::IdCatalogo('ROLES','C','admin'),
            'activo' => true,
            ]);
    }
}
