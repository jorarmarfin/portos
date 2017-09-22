<?php

namespace App\Http\Controllers\Admin\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Traits\RecordActivate;
use App\User;
use Illuminate\Http\Request;
use Alert;
class UsuariosController extends Controller
{
	use RecordActivate;
	/**
	 * Muestra todos los usuarios
	 * @return [type] [description]
	 */
    public function index()
    {
    	$Lista = User::orderBy('id')->get();
    	return view('admin.usuarios.index',compact('Lista'));
    }
    public function create()
    {
    	return view('admin.usuarios.create');
    }
    public function store(CreateUserRequest $request)
    {
    	User::create($request->all());
    	Alert::success('Usuario Registrado con exito');
    	return redirect()->route('admin.usuarios.index');
    }
    public function edit($id)
    {
    	dd($id);
    }
    public function delete($id)
    {
    	User::destroy($id);
    	Alert::success('Usuario eliminado con exito');
    	return redirect()->route('admin.usuarios.index');
    }

}
