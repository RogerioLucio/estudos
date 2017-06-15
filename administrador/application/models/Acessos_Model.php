<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
* @author Cristiane <>
* @author Julio  <>
* @copyright 2017 - Trabalho de Conclusão de Cursos
*/
class Acessos_Model extends CI_Model{
	
	public function Verifica_login(){
	$this->load->library("usuario");
		/*
		*	Tipos de retorno
		*   0 - Usuário Existente e senha correta
		*	1 - Usuário existente porém senha errada
		*	2 - Usuário não existe
		*   * - Podem ser definidos diversos status
		*/

		$this->db->select("*");
		$this->db->from("user_login");
		$this->db->where('cpf', $this->input->post("cpf"));
		$query = $this->db->get();

		/*
		* Verifica se existe usuario com este CPF
		* Se existir, verifica se a senha digitada é igual a do usuario
		* Se a senha digitada é igual a do usuario carrega a classe usuario e retorna 0
		* Se não retorna 1 
		* Se o usuário não existir, retorna 2
		*/
		if($query->num_rows()){
			foreach($query->result() as $key => $value){
				$usuario[$key] = $value;				
			}	
			if($usuario[0]->password == md5($this->input->post("password"))){
				$this->usuario->setIdLogin($usuario[0]->id_login);	
				$this->usuario->setEmail($usuario[0]->email);	
				$this->usuario->setCPF($usuario[0]->cpf);
				$this->Obter_Chaves($usuario[0]->id_login);
				return 0;
				exit;
			}else{
				return 1;
				exit;
			}
		}else{
			return 2;
			exit;
		}
	}

	public function Obter_Chaves($user_id){
		$this->load->library("usuario");
		$this->db->select("CONCAT(id_key_page ,'-', id_acess) AS acesso");
		$this->db->from("user_key");
		$this->db->where('id_user',$user_id);
		$query = $this->db->get();
		$array_chave = array();
		$i = 0;
		if($query->num_rows()){
			foreach($query->result() as $key => $value){
				$usuario_[$key] = $value;
				array_push($array_chave, $usuario_[$i]->acesso );
				$i++;
			}	
			$this->usuario->setChaves($array_chave);
			$acesso_usuario = $this->usuario->getChaves();
			$this->verifica_acesso();
	}
}


 	public function verifica_acesso($id_page = ""){
 		$this->load->library("usuario");
 		$id_page = 1;
 		$acesso_usuario = $this->usuario->getChaves();
		//$teste = $this->usuario->getIdLogin();
		for( $i = 0 ; $i < 2 ; $i++){
		$chave = explode('-', $acesso_usuario[$i]);
			 if($chave[0] == $id_page){
	 			$acesso = $chave[1];
			 }
		}
		
		if(isset($acesso)){
			echo $acesso;
		}else{
			echo -1;
		}
  }

  	public function Acessos_pagina($id_pagina){
		if(isset($id_pagina)){
			$this->db->select("route_page");
			$this->db->from("page_key");
			$this->db->where('id_page_key',$id_pagina);
			$query = $this->db->get();
			$resultado = $query->result();
			if(isset($resultado[0]->route_page)){
				return $resultado[0]->route_page;
				exit;
			}else{
				return 0;
				exit;
			}
		}
  	}
}