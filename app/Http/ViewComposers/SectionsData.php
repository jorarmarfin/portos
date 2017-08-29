<?php
namespace App\Http\ViewComposers;

use App\Models\Catalogo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class SectionsData
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$secciones = Catalogo::select('activo','nombre')->Table('SECCIONES')->get();

		$notifications = $secciones->where('nombre','notifications')->first()->activo;
		$messages = $secciones->where('nombre','messages')->first()->activo;
		$tasks = $secciones->where('nombre','tasks')->first()->activo;
		$quicksiderbar = $secciones->where('nombre','quicksiderbar')->first()->activo;
		$actions = ($secciones->where('nombre','actions')->first()->activo) ? '' : 'hide' ;
		$search = $secciones->where('nombre','search')->first()->activo;
		$panel = $secciones->where('nombre','panel')->first()->activo;
		$pagebar = ($secciones->where('nombre','pagebar')->first()->activo) ? '' : 'hide' ;
		$page_bar_actions = $secciones->where('nombre','page_bar_actions')->first()->activo;
		$breadcrumb = $secciones->where('nombre','breadcrumb')->first()->activo;
		$view->with(compact('notifications','messages','tasks','quicksiderbar','actions','search','panel','page_bar_actions','breadcrumb','pagebar'));
	}
}