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
			'Inicio' => ['url' => '#', 'icon' => 'flaticon-share'],
			'Configuracion' => [
						'submenu'=>[
							'Catalogo'=>['url'=>'#','roles'=>['root']],
							'Secciones'=>['url'=>['#','secciones'],'roles'=>['root']],
							'Roles'=>['url'=>['#','roles'],'roles'=>['root']],
							'Usuarios'=>['url'=>'#','roles'=>['root']]
						]
			],
			'contact-us' => ['full_url' => 'http://contact.us','roles'=>['admin','root']]
		];
		$view->with(compact('items'));
	}
}