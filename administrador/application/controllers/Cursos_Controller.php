<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_Controller extends CI_Controller {
	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <>
	* @author Julio  <>
	* @copyright 2017 - Trabalho de Conclusão de Cursos
	*/
	public function index(){
		$this->load->view('common/header');
		$this->load->view('componentes/nav');
		$this->load->view('Cadastrar_cursos');
	}

	public function Login(){
		$this->load->view('common/header');
		$this->load->view('componentes/nav');
		$this->load->view('common/home');
	}

	public function Cadastrar_Cursos(){
		$this->load->model("Cursos_Model");
		echo $this->Cursos_Model->Cadastrar_Cursos();
	}

	public function Cursos_Cadastrados(){
		$this->load->model("Cursos_Model");
		$data['cursos'] =  $this->Cursos_Model->get_Cursos();

		$this->load->view('common/header');
		$this->load->view('componentes/nav');
		$this->load->view('cursos_cadastrados', $data);
	}
	public function Filtrar(){
		$this->load->model("Cursos_Model");
		$data['cursos'] =  $this->Cursos_Model->Filtrar($_POST);

		echo json_encode($data['cursos']);
	}

	public function Atualizar(){
		$this->load->model("Cursos_Model");
		echo  $this->Cursos_Model->Atualizar();

	}

	
	public function Visualizar(){
		$this->load->model("Cursos_Model");
		echo  json_encode($this->Cursos_Model->Visualizar());

	}


	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <cyurikom@gmail.com>
	* @author Julio  <jcesar_fb@yahoo.com.br>
	/ Verifica se o usuário preencheu os campos de login
	/ Se ele não os preencheu devolve com os erros se sim chama a função que verifica usuário
	*/
	


	
}
