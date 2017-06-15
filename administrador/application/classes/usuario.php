<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Migration Class
 *
 * All migrations should implement this, forces up() and down() and gives
 * access to the CI super-global.
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      Reactor Engineers
 * @link
 */


class CI_usuario {
 
    private $nome;
    private $email;
    private $login;
    private $prontuario;
  

    public function getNome(){
    	return $this->nome;
    }

    public function setNome($Nome= ''){
    	$this->nome = $Nome;
    }
}   
?>