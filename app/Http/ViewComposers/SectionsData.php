<?php
namespace App\Http\ViewComposers;

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
		$notifications = true;
		$messages = true;
		$tasks = true;
		$quicksiderbar = true;
		$actions = '';
		$search = true;
		$panel = true;
		$pagebar = '';
		$page_bar_actions = true;
		$breadcrumb = true;
		$view->with(compact('notifications','messages','tasks','quicksiderbar','actions','search','panel','page_bar_actions','breadcrumb','pagebar'));
	}
}