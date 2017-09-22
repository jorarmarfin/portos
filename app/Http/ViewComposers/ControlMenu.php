<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class ControlMenu
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$items = [
			'Inicio' => ['route' => 'home.index', 'icon' => 'icon-home'],
			'Configuracion' => ['icon'=>'icon-settings',
						'submenu'=>[
							'Catalogo'=>['route'=>'catalogo.index','roles'=>['root']],
							'Secciones'=>['route'=>['catalogo.show','secciones'],'roles'=>['root']],
							'Roles'=>['route'=>['catalogo.show','roles'],'roles'=>['root']],
							'Usuarios'=>['route'=>'admin.usuarios.index','roles'=>['root']]
						]
			],
			'contact-us' => ['full_url' => 'http://contact.us','roles'=>['admin','root']]
		];
		$view->with(compact('items'));
	}
}