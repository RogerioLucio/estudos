<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_Controller extends CI_Controller {
	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <>
	* @author Julio  <>
	* @copyright 2017 - Trabalho de Conclusão de Cursos
	*/
	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/login');
	}

	public function Login(){
		$this->load->view('common/header');
		$this->load->view('componentes/nav');
		$this->load->view('common/home');
	}

	public function Cadastrar_Empresa(){

		var_dump($_POST);
		exit;
		$this->load->modal("Empresas_Model");
		$this->Empresas_Model->Cadastrar_Empresa();


	}
	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <cyurikom@gmail.com>
	* @author Julio  <jcesar_fb@yahoo.com.br>
	/ Verifica se o usuário preencheu os campos de login
	/ Se ele não os preencheu devolve com os erros se sim chama a função que verifica usuário
	*/
	


	
}
