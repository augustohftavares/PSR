<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['title'] = "PSR - Dashboard";
		$this->load->view('Dashboard/index', $data);
	}
}

?>
