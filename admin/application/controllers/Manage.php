<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Manage_model');
	}

	public function index()
	{
		$data=array();
		$result=$this->Manage_model->get_class();
		$data['result']=$result;
		
		
		$data['main_content']='manage';

		$this->load->view('common/template',$data);
	}
	
}
