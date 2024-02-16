<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appoitment extends CI_Controller
{

	

	public function index()
	{
		$data = array();

		$data['main_content'] = 'appoitment';
		$this->load->view('common/template', $data);
	}
}




