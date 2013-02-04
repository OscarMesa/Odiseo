<?php
	include ('../Modelo/generica/cls_db.php');
	include ('../Modelo/negocio/clsPropietarios.php');



	$method = $_POST['mathod'];
	$o = new Ctrl_Propietarios();
	$o->$method();


	class Ctrl_Propietarios{
		private $modelUser;


		public function __construct(){
			$this->modelUser = new clsPropietarios();
		}

		/**
		* Este metodo retorna los usuarios.
		*	@author Laura
		*	@return array
		*/
		public function getPropietarios()
		{
			$res = $this->modelUser->getAllPropietarios();
			$Propietarios = array();
			while($r = $res->fetch_array())
				$Propietarios[] = $r;
			echo json_encode($Propietarios);
		}

	}
?>












