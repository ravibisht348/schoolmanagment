<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('About_model');
	}

	public function index()
	{
		$result = $this->About_model->read_about(1);

		$data = array();

		$data['result'] = $result;

		$data['main_content'] = 'about';
		$this->load->view('common/template', $data);
	}
}




