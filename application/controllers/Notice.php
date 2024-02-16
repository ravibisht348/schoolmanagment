<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notice extends CI_Controller
{

	

	public function index()
	{


		$data = array();


		$data['main_content'] = 'notice';
		$this->load->view('common/template', $data);
	}
}




