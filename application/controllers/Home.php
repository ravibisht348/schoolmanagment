<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Home_model');
	}

	public function index()
	{

		$result = $this->Home_model->read_notice();

		$data = array();

		$data['result'] = $result;

		$data['main_content'] = 'home';
		$this->load->view('common/template', $data);
	}
}




