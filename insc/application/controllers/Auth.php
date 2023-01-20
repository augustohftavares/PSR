<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('auth_model');
	}

  public function index() {
		$data['title'] = "PSR - Iniciar Sessão";
		$this->load->view('Auth/index_log', $data);
	}

	public function index_reg() {
		$data['title'] = "PSR - Criar Conta";
		$this->load->view('Auth/index_reg', $data);
	}

  public function register() {
    $this->auth_model->register_client();
  }//end register()


  public function login() {
    $this->auth_model->login_client();
  }//end login()

	public function logout() {
		$this->auth_model->logout_client();
	}




}//end class Clients()

?>
