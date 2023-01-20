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

	public function edit() {
		$data['title'] = "PSR - Editar Cliente";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("ocorrencias"), 'refresh');

		$data['clients'] = $this->clients_model->GetById($id);

		$this->load->view('Clients/edit', $data);
	}

	public function details() {
		$data['title'] = "PSR - Detalhes Cliente";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("clientes"), 'refresh');

		$data['clients'] = $this->clients_model->GetById($id);
		$this->load->view('Clients/details', $data);
	}

	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$client = $this->input->post();
			$status = $this->clients_model->Update($client['id'], $client);

			if(!$status)
				$this->session->set_flashdata('error', 'Não foi possível atualizar o produto.');

			else {
				$this->session->set_flashdata('success', '<script>clientUpdatedSuccess();</script>');
				redirect(base_url("clientes"), 'refresh');
			}
		} else
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
	}

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'update':
			case 'insert':
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
				$rules['email'] = array('trim', 'required', 'valid_email');
				$rules['telemovel'] = array('trim', 'required', 'integer');
				$rules['nif'] = array('trim', 'integer');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('nome', 'Nome', $rules['nome']);
		$this->form_validation->set_rules('email', 'Email', $rules['email']);
		$this->form_validation->set_rules('telemovel', 'Telemóvel', $rules['telemovel']);
		$this->form_validation->set_rules('nif', 'NIF', $rules['nif']);
		return $this->form_validation->run();
	}
}//end class Clients()

?>
