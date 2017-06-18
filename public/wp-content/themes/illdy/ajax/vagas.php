<?php
/*
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */	
	$url = import_url();
	include $url ."wp-load.php";
	function import_url(){
		$teste = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
		$teste2 = explode('index.php', $teste[0]);
		return $teste2[0];
	}

	switch ($_POST['action']) {
		case 'cadastrar':
			  cadastrar();
			break;
			case 'filtrar':
				 carrega_grid('cursos', $_POST);
				break;

			case 'visualizar':
				 visualizar($_POST);
				break;
			case 'editar':
				editar($_POST);
				break;
		
		default:
			# code...
			break;
	}


	function cadastrar(){
		global $wpdb;
 		$data = array(
		      'nm_cargo'=> $_POST['funcao'],
		      'nm_empresa'=> $_POST['empresa'],
		      'vl_salario'=> $_POST['salario'],
		      'qt_vagas'=> $_POST['qtdVagas'],
		      'nm_cidade'=> $_POST['cidade'],
		      //'sg_uf'=> 'SP',
		      'nm_email'=> $_POST['email'],
		      'nr_telefone'=> $_POST['telefone'],
		      //'nm_requisito'=> $_POST['preRequisito'],
		      //'nm_escolaridade'=> $_POST['escolaridadeMin'],
		      //'ds_curso' => $_POST['descricaoCurso']
    	);
		$wpdb->insert('vagas',$data);
		/*
		* 1 - Cadastrado
		* 0 - Erro
		*/
		if($wpdb->rows_affected){
			echo 1;
		}else{
			echo 0 ;
		}
	}

	 function carrega_grid($tabela = '', $filtros = ''){
		 	global $wpdb;
		 	if(empty($filtros)){
		 			return $wpdb->get_results("SELECT * FROM " . $tabela);
		 	}else{ 
		 			 $filter = '';
		 				if(!empty($filtros['curso'])){
		 					$filter = " AND nm_curso LIKE '%" . $filtros['curso'] . "%' ";
		 				}
		 		   		if(!empty($filtros['empresa'])){
		 					$filter .= " AND nm_empresa LIKE '%" . $filtros['empresa'] . "%' ";
		 				}
		 				if(!empty($filtros['hora'])){
		 					$filter .= " AND qt_carga_horaria LIKE '%" . $filtros['hora'] . "%' ";
		 				}

		 				if(!empty($filtros['cidade'])){
		 					$filter .= " AND nm_cidade LIKE '%" . $filtros['cidade'] . "%' ";
		 				}
		 				if(!empty($filtros['estado'])){
		 					$filter .= "  AND sg_uf LIKE '%" . $filtros['estado'] . "%' ";
		 				}
		 				echo json_encode($wpdb->get_results("SELECT * FROM " . $tabela . " WHERE TRUE " . $filter . ""));
		 				exit;

		 	}
		}
		function visualizar($post){
				global $wpdb;
				echo json_encode($wpdb->get_results("SELECT * FROM cursos where id_curso=" .(int)$post['id_curso']));
		}

		function editar($post){
			global $wpdb;
			foreach($post as $key => $val){
				$updata .= $key . "= '" . $val . "', " ;

			}
			$valores = explode(", action", $updata);
			$wpdb->get_results("UPDATE cursos SET " . $valores[0]  .  " where id_curso=" .(int)$post['id_curso']);
			if($wpdb->rows_affected){
				echo 1;
			}else{
				echo 0 ;
			}
			exit;
		}
?>