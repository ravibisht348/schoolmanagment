<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notice extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Notice_model');
	}
	public function index()
	{
		$result=$this->Notice_model->read_notice();
		$data = array();

		$data['result']=$result;
		$data['main_content'] = 'notice';
		$this->load->view('common/template', $data);
	}
}




