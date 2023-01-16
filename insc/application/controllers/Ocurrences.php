<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocurrences extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ocurrences_model');
		$this->load->model('clients_model');
	}

	public function index() {
		$data['title'] = "PSR - Ocorrências";
		$ocurrences =  $this->ocurrences_model->GetAll('nomeCliente');
		$data['ocurrences'] = $this->ocurrences_model->Modelar($ocurrences);
		$this->load->view('Ocurrences/index', $data);
	}

	public function add() {
		$data['title'] = "PSR - Adicionar Ocurrência";

		$ocurrences =  $this->ocurrences_model->GetAll('nomeCliente');
		$data['ocurrences'] = $this->ocurrences_model->Modelar($ocurrences);

		$clients =  $this->clients_model->GetAll('nome');
		$data['clients'] = $this->clients_model->Modelar($clients);

		$this->load->view('Ocurrences/add', $data);
	}



	public function Save(){
		$data['title'] = "PSR - Adicionar Ocurrência";
		$data['ocurrences'] = $this->ocurrences_model->Modelar($ocurrences);
		$validacao = self::Validation();

		if($validacao){

			$ocurrence = $this->input->post();
			$status = $this->ocurrences_model->Insert($ocurrence);

			if(!$status) {
				$this->session->set_flashdata('error', 'Não foi possível inserir a ocorrência.');
			} else {
				$this->session->set_flashdata('success', '<script>alert("add com sucesso")</script>');
				redirect(base_url("ocorrencias"), 'refresh');
			}

		} else {
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
			redirect(base_url("adicionar_ocurrencia"));

		}

		$this->load->view('Ocurrences/add',$data);
	}

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'save':
			case 'insert':
				//$rules['nomeCliente'] = array('trim', 'required', 'min_length[3]');
				break;
			default:
				break;
		}

		//$this->form_validation->set_rules('nomeCliente', 'Cliente', $rules['nomeCliente']);
		
		return $this->form_validation->run();
	}

}

?>
