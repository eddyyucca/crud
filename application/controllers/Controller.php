<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{


    public function get()
    {
        return $this->db->get('data')->result();
    }

    public function row($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data')->row();
    }


    public function index()
    {
        $data['data'] = $this->get();
        $this->load->view('index', $data);
    }

    public function input()
    {
        $this->load->view('input');
    }

    public function edit($id)
    {
        $data['data'] = $this->row($id);
        $this->load->view('edit', $data);
    }

    public function simpan()
    {
        $data = array(
            "kode" => $this->input->post('kode'),
            "judul" => $this->input->post('judul'),
            "pengarang" => $this->input->post('pengarang'),
            "penerbit" => $this->input->post('penerbit'),
        );
        $this->db->insert('data', $data);
        redirect('buku');
    }

    public function update($id)
    {
        $data = array(
            "kode" => $this->input->post('kode'),
            "judul" => $this->input->post('judul'),
            "pengarang" => $this->input->post('pengarang'),
            "penerbit" => $this->input->post('penerbit'),
        );
        $this->db->where('id', $id);
        $this->db->update('data', $data);
        redirect('buku');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data');
        redirect('buku');
    }
}

/* End of file Buku.php */
