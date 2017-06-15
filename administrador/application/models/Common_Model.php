<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
* @author Cristiane <>
* @author Julio  <>
* @copyright 2017 - Trabalho de Conclusão de Cursos
*/
class Common_Model extends CI_Model{




  	public function getUf(){
	
			$this->db->select("*");
			$this->db->from("estado");
			$query = $this->db->get();
			$resultado = $query->result();
		
			return $resultado;
			

			//return $resultado[0]->route_page;
			exit;
			
  	}
}