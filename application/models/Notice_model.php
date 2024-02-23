<?php
class Notice_model extends CI_Model
{
    public function read_notice()
    {
        $this->db->select('*');
        $this->db->from('tblpublicnotice');
        $result=$this->db->get()->result();
        return ($result);

    }
}
