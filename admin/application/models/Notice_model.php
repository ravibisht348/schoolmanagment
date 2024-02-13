<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	
	public function get_notice(){
		$result=$this->db->select("*")->get('tblpublicnotice')->result();
		return $result;
	}
	public function save($data)
	{
		$this->db->insert('tblpublicnotice',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	
	public function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblpublicnotice',$data);
		return($r);

	}
	public function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblpublicnotice');
		return $this->db->affected_rows();
	}
	
	
}
