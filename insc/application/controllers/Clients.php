<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('clients_model');
	}

	public function index() {
		$data['title'] = "PSR - Clientes";
		$clients =  $this->clients_model->GetAll('nome');
		$data['clients'] = $this->clients_model->Modelar($clients);
		$this->load->view('Clients/index', $data);
	}

	public function index_reg() {
		$data['title'] = "PSR - Registar";
		$this->load->view('Clients/index_reg', $data);
	}

	public function index_log() {
		$data['title'] = "PSR - Login";
		$this->load->view('Clients/index_log', $data);
	}

	public function details() {
		$data['title'] = "PSR - Detalhes Cliente";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("clientes"), 'refresh');
		$data['clients'] = $this->clients_model->GetById($id);
		$this->load->view('Clients/details', $data);
	}

	public function register() {


		$data = new stdClass();

		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required');

		if ($this->form_validation->run() === false) {

			$this->load->view('Clients/index_reg', $data);

		} else {

			$name = $this->input->post('nome');
			$email    = $this->input->post('email');
			$phone    = $this->input->post('telemovel');
			$password = $this->input->post('password');
			$password_confirm = $this->input->post('password_confirm');

			if ($this->clients_model->create_user($name,$phone, $email, $password)) {
				$this->load->view('Dashboard/index', $data);

			} else {
				$data->error = 'There was a problem creating your new account. Please try again.';
				// send error to the view
				$this->load->view('Clients/index_reg', $data);
			}
		}

	}//end register()

	public function login() {

		$data = new stdClass();

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('Clients/index_log');
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->clients_model->resolve_client_login($email, $password)) {

				$client_id = $this->clients_model->get_client_id_from_email($email);
				$client = $this->clients_model->get_user($client_id);

				$_SESSION['client_id'] = (int)$client->id;
				$_SESSION['email'] = (string)$client->email;
				$_SESSION['logged_in'] = (bool)true;
				$_SESSION['is_admin'] = (bool)$client->is_admin;

				$this->load->view('Dashboard/index', $data);
			} else {
				$data->error = 'Email ou password incorretas';
				$this->load->view('Clients/index_log', $data);
			}

		}
	}


}

?>
