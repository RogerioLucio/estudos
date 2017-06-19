<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cursos_Model extends CI_Model {
	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <cyurikom@gmail.com>
	* @author Julio  <jcesar_fb@yahoo.com.br>
	*/
	function Cadastrar_Cursos() {
		$this->load->library('session');
		$this->load->library("usuario");
		$updata	= '';
		foreach($_POST as $key => $val){
			$updata .= $key . "= '" . $val . "', " ;
		}
		$query = $this->db->query("INSERT INTO cursos SET " . $updata . "dt_cadastro= NOW() , id_user=" . $_SESSION['usuario_id'] . "");
		return $this->db->affected_rows();
	}

	function Atualizar() {
		$this->load->library('session');
		$this->load->library("usuario");
		$updata	= '';
		foreach($_POST as $key => $val){
			$updata .= $key . "= '" . $val . "', " ;
		}
		$valores = explode(", action", $updata);
		$query = $this->db->query("UPDATE cursos SET " . $valores[0]  .  " , dt_modificacao= NOW() WHERE id_curso=" . $_POST['id_curso'] . "");
		return $this->db->affected_rows();
	}

	function Visualizar() {
		$this->load->library('session');
		$sql = $this->db->query("SELECT * FROM cursos where id_curso=" .(int)$_POST['id_curso']); 			
 		return $sql->result();
		
	}


	function get_Cursos(){
		$query = $this->db->get('cursos');
		$cursos;
		foreach ($query->result() as $key => $value) {
			$cursos[$key] = $value;
		}
		return $cursos;
	}

	function Filtrar($filtros){
				$this->load->library("session");
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
 				$sql = $this->db->query("SELECT * FROM cursos WHERE TRUE " . $filter ); 			
 				return $sql->result();
 				exit;
	}
}