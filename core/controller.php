<?php

/**
* Clase del controlador principal para 
* la aplicación del hobby chat
*/
class hobbyControllerPrincipal {

	private static $vista = ''; 
	private $file_root = "./themes/template.html";

	
	public function __construct() {
		self::$vista = file_get_contents($this->file_root);
		
	}

	public static function Init(){
		return self::$vista;
	}
}


?>