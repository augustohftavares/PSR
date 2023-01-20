<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'client';
	}

	function Modelar($clients){

		if($clients) {
			for($i = 0; $i < count($clients); $i++) {
				$clients[$i]['detail_url']= base_url('detalhes_cliente'."/".$clients[$i]['id']);
			}
			return $clients;
		} else
			return false;
	}//end Modelar()

}
