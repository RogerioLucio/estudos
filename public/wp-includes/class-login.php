<?php
/*
*
*
*
*
*
*
*
*
*
*
*
*
*/


Class Login{

	private $nome;
    private $id_user;
    private $id_login;
    private $email;
    private $cpf;
    private $prontuario;
    private $chaves = array();
    protected $teste = '';
    //Acessadores - Nome do Usuario
    public function getNome(){
    	return $this->nome;
    }

    public function setNome($Nome= ''){
    	$this->nome = $Nome;
    }
    // Acessadores - Usuario Id
    public function getIdLogin(){
        return $this->id_login;
    }

    public function setIdLogin($id_login= ''){
        $this->id_login = $id_login;
    }

    // Acessadores - Usuario E-mail
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email= ''){
        $this->email = $email;
    }

    // Acessadores - Usuario CPF
    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf= ''){
        $this->cpf = $cpf;
    }
    // Acessadores - Usuario Chaves
    public function setChaves($chaves){
        $this->chaves = $chaves;
        //$this->chaves =  $teste;
    }

    public function getChaves(){
        return $this->chaves;
    }




}

