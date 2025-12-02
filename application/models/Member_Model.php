<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function createMember($input) {
        $data = array(
            'sm_user' => $input['username'],
            'sm_password' => $input['password'],
            'sm_name' => $input['name']
        );
        $this->db->insert('system_member',$data);
        return $data['name'];
    }

    public function readMemberAll() {
        $this->db->select('sm_id,sm_user,sm_password')->from('system_member');
        $query = $this->db->get();
        return $query->result();
    }
    public function readMemberById($id) {
        $where = array('sm_id' => $id);
        $this->db->select('sm_id,sm_user,sm_password')->from('system_member')->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateMember ($input) {
        $data = array('sm_name' => $input['sm_name']);
        $this->db->where('sm_id',$input['sm_id']);
        $this->db->update('system_member',$data);
        return $this->db->affected_rows();
    }
	public function deleteMember($id){
		$this->db->where(‘id’,$id);
		$this->db->delete(‘Member’);
		return $this->db->affected_rows();
	}

}
