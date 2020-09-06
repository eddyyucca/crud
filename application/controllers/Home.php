<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa');
    }

    public function index()
    {
        $data['mhs'] = $this->mahasiswa->get();
        $this->load->view('input_mhs', $data);
    }
    public function edit($id)
    {
        $data['mhs'] = $this->mahasiswa->row($id);
        $this->load->view('edit_mhs', $data);
    }

    public function input()
    {
        $data = array(
            "nama_mhs" => $this->input->post('nama_mahasiswa'),
            "npm" => $this->input->post('npm'),
        );

        $this->db->insert('data_mhs', $data);
        redirect('home');
    }
    public function update($id)
    {
        $data = array(
            "nama_mhs" => $this->input->post('nama_mahasiswa'),
            "npm" => $this->input->post('npm'),
        );
        $this->db->where('id', $id);
        $this->db->update('data_mhs', $data);
        redirect('home');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_mhs');
        redirect('home');
    }
}
