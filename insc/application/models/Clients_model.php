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

	/**
	 * create_user function.
	 *
	 * @access public
	 * @param mixed $name
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_user($name, $phone, $email, $password) {

		$data = array(
			'nome'   => $name,
			'telemovel'   => $phone,
			'email'      => $email,
			'password'   => $this->hash_password($password)
		);

		return $this->Insert($data);

	}//end create_user()

	/**
	 * resolve_user_login function.
	 *
	 * @access public
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_client_login($email, $password) {

		$this->db->select('password');
		$this->db->from('client');
		$this->db->where('email', $email);
		$hash = $this->db->get()->row('password');

		return $this->verify_password_hash($password, $hash);

	}//end resolve_user_login()

	/**
	 * get_user_id_from_username function.
	 *
	 * @access public
	 * @param mixed $email
	 * @return int the user id
	 */
	public function get_client_id_from_email($email) {

		$this->db->select('id');
		$this->db->from('client');
		$this->db->where('email', $email);

		return $this->db->get()->row('id');
	}//end get_client_id_from_email

	/**
	 * get_user function.
	 *
	 * @access public
	 * @param mixed $client_id
	 * @return object the user object
	 */
	public function get_client($client_id) {

		$this->db->from('client');
		$this->db->where('id', $client_id);
		return $this->db->get()->row();

	}//end get_user()

	/**
	 * hash_password function.
	 *
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		return password_hash($password, PASSWORD_BCRYPT);
	}//end hash_password()

	/**
	 * verify_password_hash function.
	 *
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		return password_verify($password, $hash);
	}//end verify_password_hash()

}
