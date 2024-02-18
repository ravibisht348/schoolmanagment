<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Contact_model');
	}

	public function index()
	{
		$result = $this->Contact_model->read_contact(2);

		$data = array();

		$data['result'] = $result;

		$data['main_content'] = 'contact';
		$this->load->view('common/template', $data);
	}
}




