<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addclass_model extends CI_Model {
	
	public function save($data)
	{
		$this->db->insert('tblclass',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	public function get_class(){
		$result=$this->db->select("*")->get('tblclass')->result();
		return $result;
	}
	public function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblclass',$data);
		return($r);

	}
	public function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblclass');
		return $this->db->affected_rows();
	}
	
}
