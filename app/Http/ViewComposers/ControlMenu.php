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
			'Configuracion' => [ 'icon'=>'fa fa-cog',
						'submenu'=>[
							'Catalogo'=>['route'=>'admin.catalogo.index','roles'=>['root']],
							'Secciones'=>['url'=>['#','secciones'],'roles'=>['root']],
							'Roles'=>['url'=>['#','roles'],'roles'=>['root']],
							'Usuarios'=>['url'=>'#','roles'=>['root']]
						]
			],
			'contact-us' => ['full_url' => 'http://contact.us','roles'=>['admin','root']]
		];
		$profile = [
			'Mi perfil' => ['route'=>'admin.profile'],
		];
		$view->with(compact('items','profile'));
	}
}