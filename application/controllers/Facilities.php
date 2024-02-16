<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Facilities extends CI_Controller
{
	public function index()
	{
		$data = array();

		$data['main_content'] = 'facilities';
		$this->load->view('common/template', $data);
	}
}




