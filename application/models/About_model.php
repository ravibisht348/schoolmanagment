<?php
class About_model extends CI_Model
{
    public function read_about($id)
    {
        return $this->db->get_where('tblpage', array('ID' => $id))->result();
    }
}
