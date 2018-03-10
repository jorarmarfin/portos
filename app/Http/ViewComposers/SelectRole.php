<?php
namespace App\Http\ViewComposers;

use App\Models\Catalogo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Auth;
class SelectRole
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$user = Auth::user();
		$condition = ['condition'];
		if($user->role!='root')$condition = ['root'];

		$roles = Catalogo::Combo('ROLES')->whereNotIn('codigo',$condition)->pluck('nombre','id')->toArray();
		$view->with(compact('roles'));
	}
}