<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Model
{

    public function get()
    {
        return $this->db->get('data_mhs')->result();
    }

    public function row($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_mhs')->row();
    }
}
