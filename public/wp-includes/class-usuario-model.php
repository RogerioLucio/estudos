<?php

/**
 * Migration Class
 *
 * All migrations should implement this, forces up() and down() and gives
 * access to the CI super-global.
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author Rogerio Lucio <rogerioluciodasilva@hotmail.com>
 * @author Cristiane <>
 * @author Julio  <>
 * @link
 */


class Usuario_Model {
 
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
    
    public function setIdUser($id_user= ''){
        $this->id_user = $id_user;
    }
    public function getUser($id_user= ''){
        return $id_user;
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
?>