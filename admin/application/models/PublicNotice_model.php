<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicNotice_model extends CI_Model {
	
	 function get_publicnotice(){
		$result=$this->db->select("*")->get('tblpublicnotice')->result();
		return $result;
	}
	 function save($data)
	{
		$this->db->insert('tblpublicnotice',$data);
		$r=$this->db->insert_id();
		return($r);
	}
	
	 function update($data){
		$id=$data['ID'];
		$this->db->where('ID',$id);
		$r=$this->db->update('tblpublicnotice',$data);
		return($r);

	}
	 function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('tblpublicnotice');
		return $this->db->affected_rows();
	}
	
	
}
