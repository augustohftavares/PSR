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

	public function details() {
		$data['title'] = "PSR - Detalhes Cliente";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("clientes"), 'refresh');

		$data['clients'] = $this->clients_model->GetById($id);
		$this->load->view('Clients/details', $data);
	}


}//end class Clients()

?>
