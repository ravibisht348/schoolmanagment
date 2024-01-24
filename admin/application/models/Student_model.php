<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	
	public function get_student(){
		$result=$this->db->select("*")->get('tblstudent')->result();
		return $result;
	}
	
}
