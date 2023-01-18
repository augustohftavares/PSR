<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocurrences_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'ocurrence';
	}
	
	function Modelar($ocurrences){
		if($ocurrences) {
			for($i = 0; $i < count($ocurrences); $i++) {
				$ocurrences[$i]['edit_url'] = base_url('editar_ocorrencia'."/".$ocurrences[$i]['id']);
				$ocurrences[$i]['del_url'] = base_url('eliminar_ocorrencia'."/".$ocurrences[$i]['id']);
				$ocurrences[$i]['detail_url'] = base_url('detalhes_ocorrencia'."/".$ocurrences[$i]['id']);
			}
			return $ocurrences;
		} else
			return false;
	}

	function ClosedOcurr() {
		$sql = $this->db->query('SELECT * FROM ocurrence WHERE status = "fechado"');
    	return $sql->result();
	}

}