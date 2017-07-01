<?php

namespace App\Services;

use Form;
use Collective\Html\FormBuilder;

/**
* Macros de formulario
*/
class Macros extends FormBuilder
{

	function __construct()
	{
		# code...
	}
	/**
	 * Boton para regresar al formulario anterior
	 * @param string $value [description]
	 */
	public function Back()
	{
		Form::macro('back', function ($url) {
            return '
            	<a href="'.$url.'" class="btn default">
	                <i class="fa fa-mail-reply"></i>
	                REGRESAR
                </a>

            ';
        });
	}
	/**
	 * Boton para hacer Submit
	 * @param string $value [description]
	 */
	public function Enviar()
	{
		Form::macro('enviar', function ($name,$color = 'green',$iconclass = 'fa-save') {

            return '
            	<button type="submit" class="btn '.$color.' uppercase">
            	<i class="fa '.$iconclass.'"></i>
            	'.$name.'
            	</button>
            ';
        });
	}
	/**
	 * Boton link
	 */
	public function Boton()
	{
		Form::macro('boton',function($name,$url,$color = '',$icon = null,$botonclass=null,$data = []){
			$iconclass = (isset($icon)) ? '<i class="'.$icon.'"></i>' : '' ;
			$atributos = '';

			foreach ($data as $key => $value) {
				$atributos .= $key.'="'.$value.'"';
			}

			return '
				<a href="'.$url.'" class="btn '.$botonclass.' '.$color.'" '.$atributos.'>
	                '.$iconclass.'
	                '.$name.'
	            </a>
			';
		});

	}
	/**
	 * Boton Modal
	 */
	public function BotonModal()
	{
		Form::macro('botonmodal',function($name,$url,$color = '',$icon = null,$botonclass=null){
			$iconclass = (isset($icon)) ? '<i class="'.$icon.'"></i>' : '' ;
			return '
				<a href="'.$url.'" data-toggle="modal" class="btn '.$botonclass.' '.$color.'">
	                '.$iconclass.'
	                '.$name.'
	            </a>
			';
		});
	}
	/**
	 * Menu
	 */
	public function Menu()
	{
		Form::macro('menu',function($name,$url,$icon = null,$start=null){
			$iconclass = (isset($icon)) ? '<i class="'.$icon.'"></i>' : '' ;

			return '
				<li class="nav-item '.$start.' ">
		            <a href="'.$url.'" class="nav-link nav-toggle">
		               '.$iconclass.'
		                <span class="title">'.$name.'</span>
		                <span class="arrow"></span>
		            </a>
		        </li>
			';
		});

	}
	/**
	 * Menu LINK
	 */
	public function MenuLink()
	{
		Form::macro('menulink',function($name,$url,$icon = null){
			$iconclass = (isset($icon)) ? '<i class="'.$icon.'"></i>' : '' ;

			return '
		            <a href="'.$url.'" class="nav-link nav-toggle">
		               '.$iconclass.'
		                <span class="title">'.$name.'</span>
		                <span class="arrow"></span>
		            </a>
			';
		});

	}
	/**
	 * Bootstrap Input File
	 */
	public function BFile()
	{

		Form::macro('bfile',function($name,$color='default',$tipo=0){
			switch ($tipo) {
				case 1:
					$control = '
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                    <div>
                                        <span class="btn '.$color.' btn-file">
                                            <span class="fileinput-new"> Seleccionar archivo </span>
                                            <span class="fileinput-exists"> Cambiar </span>
                                            <input type="hidden" value="" name="'.$name.'"><input type="file" name=""> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
                                    </div>
                                </div>
							';
					break;

				default:
					$control = '
					            <div class="fileinput fileinput-new" data-provides="fileinput">
						            <div class="input-group input-large">
						                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
						                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
						                    <span class="fileinput-filename"> </span>
						                </div>
						                <span class="input-group-addon btn '.$color.' btn-file">
						                    <span class="fileinput-new"> Seleccionar archivo </span>
						                    <span class="fileinput-exists"> Cambiar </span>
						                    <input type="file" name="'.$name.'"> </span>
						                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
						            </div>
						        </div>
							';
					break;
			}
			return $control;
		});

	}

}

