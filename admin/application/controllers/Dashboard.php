<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['main_content']='dashboard';

		$this->load->view('common/template',$data);
	}
	
}
