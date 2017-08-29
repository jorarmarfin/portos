<?php
namespace App\Traits;
use DB;
use Alert;
trait RecordActivate
{
    public function activate($tabla,$id,$sw)
    {
    	DB::table($tabla)->where('id',$id)->update(['activo'=>$sw]);
    	$estado = ($sw>0) ? 'activo' : 'desactivo' ;
    	Alert::warning('Se '.$estado.' el registro');
		return back();
    }
}