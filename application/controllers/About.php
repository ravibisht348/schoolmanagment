<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	

	public function index()
	{


		$data = array();


		$data['main_content'] = 'about';
		$this->load->view('common/template', $data);
	}
}




