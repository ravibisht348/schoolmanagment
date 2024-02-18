<?php
class Contact_model extends CI_Model
{
    public function read_contact($id)
    {
        return $this->db->get_where('tblpage', array('ID' => $id))->result();
    }
}
