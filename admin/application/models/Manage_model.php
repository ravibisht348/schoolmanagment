<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_model extends CI_Model {
	
	public function get_class(){
		$result=$this->db->select("*")->get('tblclass')->result();
		return $result;
	}
	
}
