<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'client';
	}


	public function register_client() {

		$password = $this->input->post('password');
		$confirm_password = $this->input->post('password_confirm');

		$data = array(
			"nome" => $this->input->post('nome'),
			"telemovel" => $this->input->post('telemovel'),
			"email" => $this->input->post('email'),
			"password" => $password
		);

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[client.email]');
		$this->form_validation->set_rules('telemovel', 'Telemóvel', 'trim|required|integer|is_unique[client.telemovel]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirmar Password', 'trim|required|min_length[6]|matches[password]');


		if ($this->form_validation->run() === false) {
			$data['title'] = 'PSR - Criar Conta';
			$this->load->view("Auth/index_reg", $data);

		} else {

			$data = array(
				"nome" => $this->input->post('nome'),
				"telemovel" => $this->input->post('telemovel'),
				"email" => $this->input->post('email'),
				"password" => password_hash($password, PASSWORD_DEFAULT)
			);

			$this->Insert($data);
			$this->session->set_flashdata('success', '<script>registerClientSucess();</script>');
			$data['title'] = 'PSR - Login';
			$this->load->view("Auth/index_log", $data);
		}


	}//end register_client

	public function login_client() {

		//https://forum.codeigniter.com/post-321556.html

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_h = password_hash($password, PASSWORD_DEFAULT);
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$query = $this->db->get('client');
		$find_client = $query->num_rows($query);

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() === false) {

			$data['title'] = 'PSR - Iniciar Sessão';
			$this->load->view('Auth/index_log', $data);

		} else {

			if($find_client > 0) {

				$_SESSION['logged_in'] = (bool)true;

				$this->session->set_flashdata('success', 'Iniciaste sessão com sucesso');
				redirect(base_url("dashboard"), 'refresh');

			} else {
				$this->session->set_flashdata('error', 'O campo Email ou o Campo Password estão errados.');
				redirect(base_url("login"), 'refresh');

			}

		}


	}//end login_client()

	public function logout_client() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			//foreach ($_SESSION as $key => $value) {
				//unset($_SESSION[$key]);
			//}
			unset($_SESSION['logged_in']);
			$_SESSION['logged_in'] = (bool)false;

			redirect(base_url("dashboard"), 'refresh');

		} else {
			redirect('/', 'refresh');
		}

	}


}//end class Auth_model()
