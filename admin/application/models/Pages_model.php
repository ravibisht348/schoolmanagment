<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	
	public function get_pages(){
		$result=$this->db->select("*")->get('tblpage')->result();
		return $result;
	}
	public function save($data)
	{
		$this->db->insert('tblpage',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	
	public function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblpage',$data);
		return($r);

	}
	public function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblpage');
		return $this->db->affected_rows();
	}
	
	
}
