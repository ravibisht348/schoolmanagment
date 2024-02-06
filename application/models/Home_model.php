<?php
class Home_model extends CI_Model
{
    public function read_notice()
    {
        return $this->db->get('tblpublicnotice')->result();
    }
}
