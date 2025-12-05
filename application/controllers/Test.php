<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Test_model $Test_model
 */
class Test extends CI_Controller
{
	public function index()
	{
		//echo "Test works!";
		$this->load->view('test');
	}
	public function monday()
	{
		echo "hello monday";
		//$this->load->view('test');
	}
	public function show()
	{
		$this->load->model('Test_model'); //ทำการโหลด models เข้ามา
		$data['sm_name'] = $this->Test_model->getName();
		$this->load->view('test', $data);
		$this->Test_model->getName();
	}

}
