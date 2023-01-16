<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['title'] = "PSR - Página Inicial";
		$this->load->view('Clients/index', $data);
	}
}

?>
