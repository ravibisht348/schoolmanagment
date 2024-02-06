<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$data['message']='';
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$flag=$this->Login_model->validate($username,$password);

			if($flag==true)
			redirect('dashboard');
		else
		$data['message']="invalid login";
		}
		
		$this->load->view('login');
	}
	public function logout()
	{
		$sa=array();
		$sa['user_id']='';
		$sa['username']='';
		$this->session->sess_destroy();
		$this->session->unset_userdata();
		redirect(base_url().'login');
	}
}
