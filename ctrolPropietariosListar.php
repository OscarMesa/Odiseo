<?php
	include ('../Modelo/generica/cls_db.php');
	include ('../Modelo/negocio/clsPropietarios.php');



	class Ctrl_Propietarios{
		private $modelUser;


		public function __construct(){
			$this->modelUser = new clsPropietarios();
		}



	}
?>












