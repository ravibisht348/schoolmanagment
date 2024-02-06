<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	
	public function get_student(){
		$result=$this->db->select("*")->get('tblstudent')->result();
		return $result;
	}
	public function save($data)
	{
		$this->db->insert('tblstudent',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	
	public function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblstudent',$data);
		return($r);

	}
	public function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblstudent');
		return $this->db->affected_rows();
	}
	
	
}
