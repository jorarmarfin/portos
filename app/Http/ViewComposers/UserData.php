<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Auth;
class UserData
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$username = (is_null(Auth::user())) ? 'Usuario' : Auth::user()->name ;
		$view->with(compact('username'));
	}
}