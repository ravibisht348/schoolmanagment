<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addclass_model extends CI_Model {
	
	public function save($data)
	{
		$this->db->insert('tblclass',$data);
		$r=$this->db->insert_id();
		return($r);
	}
}
