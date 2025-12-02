<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Member_Model');
    }
    public function index() {
        echo 'Test';
    }
    public function create($username,$password,$name) {
        $input = array(
        'username' => $username,
        'password' => $password,
        'name' => $name
        );
        $result = $this->Member_Model->createMember($input);
        echo 'Insert '.$result.' complete';

    }

    public function read($id = '') {
        if(empty($id)) {
            $data = $this->Member_Model->readMemberAll();
        }
        else {
            $data = $this->Member_Model->readMemberById($id);
        }
        if(!empty($data) && is_array($data)){
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }

    public function update($id='',$name=''){
        if(empty($id)||empty($name)) {
            echo 'please enter id and name';
        }
        else {
            $input = array(
            'sm_id' => $id,
            'sm_name' => $name
            );
            $result = $this->Member_Model->updateMember($input);
            echo 'update '.$result.' row';
        }
    }
}