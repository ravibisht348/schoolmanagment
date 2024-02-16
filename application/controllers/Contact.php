<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	

	public function index()
	{
		$data = array();

		$data['main_content'] = 'contact';
		$this->load->view('common/template', $data);
	}
}




