<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function getName() {
		$this->db->select('sm_name')
		->from('system_member');

		$query = $this->db->get();
		return $query->result();
	}
	
				
}



