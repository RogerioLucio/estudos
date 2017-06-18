<?php
	$url = import_url();
	include $url ."wp-load.php";
	function import_url(){
		$teste = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
		$teste2 = explode('index.php', $teste[0]);
		return $teste2[0];
	}
	
			
		switch ($_POST['action']) {
			case 'filtrar':
				 carrega_grid('cursos', $_POST);
				break;

			case 'visualizar':
				 visualizar($_POST);
				break;
			case 'uf':
				getEstados();
				break;
			
			default:
				# code...
				break;
		}


		function getEstados(){
			global $wpdb;
			echo json_encode($wpdb->get_results("SELECT * FROM estado"));
		}
		
?>