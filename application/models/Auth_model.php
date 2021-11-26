<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->aut;
			$this->load->library("session");

		}
		
		public function autententicar($user, $pass){
			$datos = $this->db->findOne(array(
				'user' => $user,
				'pass' => $pass
			));			
			return $datos;
		}
	}