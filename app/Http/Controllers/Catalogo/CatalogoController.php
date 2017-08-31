<?php

namespace App\Http\Controllers\Catalogo;

use App\Http\Controllers\Controller;
use App\Models\Catalogo;
use App\Traits\RecordActivate;
use Illuminate\Http\Request;
use Alert;
class CatalogoController extends Controller
{
    use RecordActivate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = Catalogo::orderBy('id')->get();
        return view('catalogo.index',compact('Lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('catalogo.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Lista = Catalogo::Table($request->id)->get();
        $data = $request->all();
        $data['idtable'] = $Lista->last()->idtable;
        $data['iditem'] = $Lista->last()->iditem+1;
        Catalogo::create($data);
        Alert::success($request->id.' Registrado con exito');
        return redirect()->route('catalogo.show',$request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Lista = Catalogo::Table($id)->get();
        return view('catalogo.show',compact('Lista','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogo = Catalogo::find($id);
        $id = Catalogo::SearchNameTable($catalogo->idtable);
        return view('catalogo.edit',compact('catalogo','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catalogo = Catalogo::find($id);
        $catalogo->fill($request->all());
        $catalogo->save();
        $Lista = Catalogo::SearchTable($catalogo->idtable)->get();
        $id = Catalogo::SearchNameTable($catalogo->idtable);
        Alert::success('Registro actualizado con exito');
        return view('catalogo.show',compact('Lista','id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $catalogo = Catalogo::find($id);
        $Lista = Catalogo::SearchTable($catalogo->idtable)->get();
        $id = Catalogo::SearchNameTable($catalogo->idtable);
        Alert::success('Registro actualizado con exito');
        $catalogo->delete();
        return redirect()->route('catalogo.show',$id);
    }
}
