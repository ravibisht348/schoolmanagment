<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function validate($username,$password)
	{
		$flag=false;
		$sql="select * from tbladmin where username='$username' and password='$password'";
		$result=$this->db->query($sql)->result();
		if(count($result)>0){
			$row=$result[0];
			$sa=array();
			$sa['user_id']=$row->user_id;
			$sa['username']=$username;
			$this->session->set_userdata($sa);
			$flag=true;
		}
		else
			$flag=false;

			return($flag);
	}
}
