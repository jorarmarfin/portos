<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = 'catalogo';
    protected $fillable = ['idtable', 'iditem', 'codigo','nombre','descripcion','valor','activo'];
    public $timestamps = false;
    /**
     * Busca una tabla de maestro
     */
	public function Maestro($NameTable){
		$NameTable = strtoupper($NameTable);
		$data=$this->select('iditem')
				   ->where('idtable',0)
			       ->where('nombre',"$NameTable")->first();
		return $data->iditem;
	}
	/**
	 *Muestra una lista desplegable para un input select
	 */
	public function scopeCombo($cadenaSQL,$NameTable){
		$idtable=$this->Maestro($NameTable);
		return $cadenaSQL->where('idtable',$idtable)
						 ->where('activo',1)
						 ->orderBy('nombre');
	}
	/**
	 * Devuelve el Id de un registro de una de las tablas de catalogo buscando por un campo
	 *
	 * @param      String  $NameTable     El nombre de la Tabla
	 * @param      String  $field  		  El campo que se usara para buscar
	 * @param      String  $Name		  El nombre del que se desea su id
	 *
	 * @return     <type>  ( description_of_the_return_value )
	 */
	public function scopeIdCatalogo($cadenaSQL,$NameTable,$Field,$Name){
		$idtable=$this->Maestro($NameTable);
		$campo = ($Field=='C') ? 'codigo' : 'nombre' ;
		return $cadenaSQL->where('idtable',$idtable)
						 ->where($campo,$Name)
						 ->where('activo',1)->pluck('id')[0];
	}
	 #--------------------------------------------------------------------
    public function scopeTable($cadenaSQL,$NameTable){
        $NameTable = strtoupper($NameTable);
        $idtable=$this->Maestro($NameTable);
        return $cadenaSQL->where('idtable',$idtable)
                         ->orderBy('iditem','asc');
    }
    #--------------------------------------------------------------------
    public function scopeIdtable($cadenaSQL,$NameTable){
        $NameTable = strtoupper($NameTable);
        return $cadenaSQL->select('iditem')
                         ->where('idtable',0)
                         ->where('nombre',"$NameTable")
                         ->where('activo',1)
                         ->first();
    }
}
