<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocurrences extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ocurrences_model');
	}

	public function index() {
		$data['title'] = "PSR - Ocorrências";
		$ocurrences =  $this->ocurrences_model->GetAll('nomeCliente');
		$data['ocurrences'] = $this->ocurrences_model->Modelar($ocurrences);
		$this->load->view('Ocurrences/index', $data);
	}

	public function add() {
		$this->load->model('clients_model');
		$data['title'] = "PSR - Adicionar Ocurrência";

		$ocurrences =  $this->ocurrences_model->GetAll('nomeCliente');
		$data['ocurrences'] = $this->ocurrences_model->Modelar($ocurrences);

		$clients =  $this->clients_model->GetAll('nome');
		$data['clients'] = $this->clients_model->Modelar($clients);

		$this->load->view('Ocurrences/add', $data);
	}

	public function edit() {
		$data['title'] = "PSR - Editar Ocorrência";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("ocorrencias"), 'refresh');

		$data['ocurrences'] = $this->ocurrences_model->GetById($id);

		$this->load->view('Ocurrences/edit', $data);
	}

	public function details() {
		$data['title'] = "PSR - Editar Ocorrência";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("ocorrencias"), 'refresh');

		$data['ocurrences'] = $this->ocurrences_model->GetById($id);

		$this->load->view('Ocurrences/details', $data);
	}

	public function ocurrences_closed() {
		$data['title'] = "PSR - Ocorrências Fechadas";

		$data['ocurrences'] =  $this->ocurrences_model->ClosedOcurr();

		$this->load->view('Ocurrences/ocurrences_closed', $data);
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
				$this->session->set_flashdata('success', '<script>ocurrenceAddSuccess();</script>');
				redirect(base_url("ocorrencias"), 'refresh');
			}

		} else {
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
			redirect(base_url("registar"));

		}

		$this->load->view('Ocurrences/add',$data);
	}

	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$ocurrence = $this->input->post();
			$status = $this->ocurrences_model->Update($ocurrence['id'], $ocurrence);

			if(!$status)
				$this->session->set_flashdata('error', 'Não foi possível atualizar o produto.');
			else {
				$this->session->set_flashdata('success', '<script>ocurrenceUpdatedSuccess();</script>');
				redirect(base_url("ocorrencias"), 'refresh');
			}
		} else
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
	}


	public function Delete() {
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('ocorrencias', 'refresh');

		$status = $this->ocurrences_model->Delete($id);

		if($status) {
			$this->session->set_flashdata('success', '');
			redirect(base_url("ocorrencias"), 'refresh');
		} else
			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar esta ocorrência. </p>');
	}

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'save':
			case 'update':
			case 'insert':
				$rules['nomeCliente'] = array('trim', 'required', 'min_length[3]');
				$rules['tipoEquipa'] = array('trim', 'required', 'min_length[2]', 'max_length[10]');
				$rules['marca'] = array('trim', 'required', 'min_length[2]');
				$rules['modelo'] = array('trim', 'required', 'min_length[3]');
				$rules['backup'] = array('trim', 'required', 'min_length[3]', 'max_length[3]');
				$rules['autorizaAbertura'] = array('trim', 'required', 'min_length[3]', 'max_length[3]');
				$rules['pelicula'] = array('trim', 'required', 'min_length[3]', 'max_length[3]');
				$rules['pin'] = array('trim', 'required', 'min_length[3]');
				$rules['anomalia'] = array('trim', 'min_length[3]');
				$rules['observacoes'] = array('trim', 'min_length[3]');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('nomeCliente', 'Cliente', $rules['nomeCliente']);
		$this->form_validation->set_rules('tipoEquipa', 'Tipo de Equipamento', $rules['tipoEquipa']);
		$this->form_validation->set_rules('marca', 'Marca', $rules['marca']);
		$this->form_validation->set_rules('modelo', 'Modelo', $rules['modelo']);
		$this->form_validation->set_rules('backup', 'Backup', $rules['backup']);
		$this->form_validation->set_rules('autorizaAbertura', 'Autoriza a abertura', $rules['autorizaAbertura']);
		$this->form_validation->set_rules('pelicula', 'Película', $rules['pelicula']);
		$this->form_validation->set_rules('pin', 'Pin', $rules['pin']);
		$this->form_validation->set_rules('anomalia', 'Anomalia', $rules['anomalia']);
		$this->form_validation->set_rules('observacoes', 'Observações', $rules['observacoes']);
		return $this->form_validation->run();
	}

}

?>
