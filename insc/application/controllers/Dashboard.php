<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ocurrences_model');
		$this->load->model('clients_model');

	}

	public function index() {

		$data['title'] = "PSR - Dashboard";

		$ocurrences =  $this->ocurrences_model->GetAll('nomeCliente');
		$clients =  $this->clients_model->GetAll('nome');
		$ocurrencesClosed = $this->ocurrences_model->ClosedOcurr();

		$data['ocurrencesTotal'] = count($ocurrences);
		$data['ocurrencesClosedTotal'] = count($ocurrencesClosed);
		$data['clientsTotal'] = count($clients);


		$this->load->view('Dashboard/index', $data);

	}

}

?>
