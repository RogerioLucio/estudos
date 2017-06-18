<?php
/*
* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
* @author Cristiane <>
* @author Julio  <>
* @copyright 2017 - Trabalho de Conclusão de Cursos
*/
class Acessos_Model {
	
	public function Verifica_login($values){
		/*
		*	Tipos de retorno
		*   0 - Usuário Existente e senha correta
		*	1 - Usuário existente porém senha errada
		*	2 - Usuário não existe
		*   * - Podem ser definidos diversos status
		*/
		global $wpdb;
		$wpdb->get_results("SELECT * FROM user_login where cpf= '". esc_sql($values['cnpj']) . "'");
		/*
		* Verifica se existe usuario com este CPF
		* Se existir, verifica se a senha digitada é igual a do usuario
		* Se a senha digitada é igual a do usuario carrega a classe usuario e retorna 0
		* Se não retorna 1 
		* Se o usuário não existir, retorna 2
		*/	
		if($wpdb->num_rows){
			foreach($wpdb->last_result as $key => $value){
				$usuario[$key] = $value;				
			}	
		$acessos = new Acessos_Model();
		$user = new Usuario_Model();
		if(trim($usuario[0]->password) == trim(md5($values["password"]))){
			$user->setIdLogin($usuario[0]->id_login);	
			$user->setEmail($usuario[0]->email);	
			$user->setCPF($usuario[0]->cpf);
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
		global $wpdb;
		$user = new Usuario_Model();
		$wpdb->get_results("SELECT CONCAT(id_key_page ,'-', id_acess) AS acesso FROM user_key where id_user= '". esc_sql($user_id) . "'");
		
	
		$array_chave = array();
		$i = 0;
		if($wpdb->num_rows){
			foreach($wpdb->last_result as $key => $value){
				$usuario_[$key] = $value;
				array_push($array_chave, $usuario_[$i]->acesso );
				$i++;
			}	
			$user->setChaves($array_chave);
			$acesso_usuario = $user->getChaves();

			$this->verifica_acesso();
	}
}


 	public function verifica_acesso($id_page = ""){
 		$user = new Usuario_Model();
 		$id_page = 1;
 		$acesso_usuario = $user->getChaves();
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