<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::create(['idtable' => 0,'iditem' => 0, 'codigo' => 'MAE','nombre'=>'MAESTRO','descripcion'=>'MAESTRO DE TABLAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 1, 'codigo' => 'ROLES','nombre' => 'ROLES','descripcion'=>'Rol de lo su suarios al sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 2, 'codigo' => 'SECCIONES','nombre' => 'SECCIONES','descripcion'=>'Secciones que mostrara el sistema','valor'=> null,'activo'=>true]);
        /**
         * sub tablas
         */
        Catalogo::create(['idtable' => 1,'iditem' => 1, 'codigo' => 'root','nombre' => 'root','descripcion'=>'Administrador del sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 2, 'codigo' => 'admin','nombre' => 'Administrador','descripcion'=>'Administrador la Institucion educativa ','valor'=> null,'activo'=>true]);
        /**
         * Secciones
         */
        Catalogo::create(['idtable' => 2,'iditem' => 1, 'codigo' => 'not','nombre' => 'notifications','descripcion'=>'Notificaciones ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 2, 'codigo' => 'msj','nombre' => 'messages','descripcion'=>'Mensajes ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 3, 'codigo' => 'tas','nombre' => 'tasks','descripcion'=>'Tareas ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 4, 'codigo' => 'qsb','nombre' => 'quicksiderbar','descripcion'=>'Barra rapida ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 5, 'codigo' => 'act','nombre' => 'actions','descripcion'=>'Acciones','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 6, 'codigo' => 'sea','nombre' => 'search','descripcion'=>'Seccion de busqueda','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 7, 'codigo' => 'pan','nombre' => 'panel','descripcion'=>'Muestra el panel','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 8, 'codigo' => 'pbr','nombre' => 'pagebar','descripcion'=>'Muestra la barra','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 9, 'codigo' => 'pba','nombre' => 'page_bar_actions','descripcion'=>'Muestra el boton de acciones de la barra','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 10, 'codigo' => 'bre','nombre' => 'breadcrumb','descripcion'=>'Muestra el breadcrumb','valor'=> null,'activo'=>true]);

    }
}
