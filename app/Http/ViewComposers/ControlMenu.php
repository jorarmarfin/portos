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
							'Catalogo'=>[],
							'Usuarios'=>[]
						]
			],
			'contact-us' => ['full_url' => 'http://contact.us','roles'=>'root']
		];
		$view->with(compact('items'));
	}
}