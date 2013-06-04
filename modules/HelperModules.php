<?php

namespace modules;

/**
 * Clase creada con unos metodos que todos los controladores van a utilizar.
 * @author Diego Rayo
 */

class HelperModules
{

	public static function crearMensajeExito($mensajeExito){
		$html = "<div class='divTextoMensajesExito'><b>&Eacute;xito</b><br />".$mensajeExito."</div>";
		return $html;
	}

	public static function crearMensajeError($mensajeError){
		$html = "<div class='divTextoMensajesError'><b>Error</b><br />".$mensajeError."</div>";
		return $html;
	}

	public static function  redireccionarAlInicio(){
		header("location: http://ProjectPHP/home");
	}

	public static function  redireccionar($destino){
		header("location: http://ProjectPHP/".$destino);
	}

	public static function leerPlantillaHTML($nombreModulo , $nombreFile){
		$html = file_get_contents($nombreModulo."/html/".$nombreFile.".phtml", true);
		$html = str_replace("\n", "", $html);
		$html = str_replace("\t", "", $html);
		return $html;
	}

}