<?php
		
/*
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */	
	$url = import_url();
	echo "<pre>";
	include $url ."wp-load.php";
	include_once( ABSPATH . WPINC . '/class-usuario-model.php' );
	include_once( ABSPATH . WPINC . '/class-acessos-model.php' );
	function import_url(){
		$teste = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
		return $teste[0];
	}
		if(isset($_POST) || !empty($_POST)){
			$acessos = new Acessos_Model();
			$retorno = $acessos->Verifica_login($_POST);


			switch ($retorno) {
				case '0':
					header("Location:home-admin");
					exit;
					break;

				case '0':
					header("Location:admin");
					exit;
					break;
				
				default:
					header("Location:admin");
					break;
			}

			exit;






		}

			

?>