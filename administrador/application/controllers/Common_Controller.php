<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_Controller extends CI_Controller {
	/*
	* @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
	* @author Cristiane <cyurikom@gmail.com>
	* @author Julio  <jcesar_fb@yahoo.com.br>

	*/
	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/login');
	}

	
	public function getUf(){
		$this->load->model("Common_Model");
		$resultado  = $this->Common_Model->getUf();
		echo json_encode($resultado) ;
	}
}
