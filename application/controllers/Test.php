<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index() {
        //echo "Test works!";
       $this->load->view('test');
    }
    public function monday() {
        echo "hello monday";
        $this->load->view('test');
    }
    public function show() {
        $this->load->model('test_model'); //ทำการโหลด models เข้ามา
        $data['sm_name'] = $this->test_model->getName();
        $this->load->view('test', $data);
    }
}
