<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forteacher extends CI_Controller
{
	public function index()
	{
		$data = array();

		$data['main_content'] = 'forteacher';
		$this->load->view('common/template', $data);
	}
}




