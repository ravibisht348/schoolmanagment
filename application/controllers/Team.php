<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{

	

	public function index()
	{
		$data = array();

		$data['main_content'] = 'team';
		$this->load->view('common/template', $data);
	}
}




