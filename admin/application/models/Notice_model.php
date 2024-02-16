<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {
	
	 function get_notice(){
		$result=$this->db->select("*")->get('tblnotice')->result();
		return $result;
	}
	 function save($data)
	{
		$this->db->insert('tblnotice',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	
	 function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblnotice',$data);
		return($r);

	}
	 function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblnotice');
		return $this->db->affected_rows();
	}
	
	
}
