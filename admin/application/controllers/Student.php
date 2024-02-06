2<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Student_model');
	}

	public function index()
	{
		$data=array();
		$result=$this->Student_model->get_student();
		$data['result']=$result;
		
		
		$data['main_content']='student';

		$this->load->view('common/template',$data);
	}
	
}
