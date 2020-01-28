<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_model {
    public function getAllData()
    {
        return $this->db->get('tbl_prodi')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "id_prodi" => $this->input->post('id_prodi', true),
            "nama_prodi" => $this->input->post('nama_prodi', true),
            "jenjang" => $this->input->post('jenjang', true),
            "biaya" => $this->input->post('biaya', true),
            "akreditas" => $this->input->post('akreditas', true)
        ];

        $this->db->insert('tbl_prodi', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('tbl_prodi', ['id_prodi' => $id]);
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tbl_prodi', ['id_prodi' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "id_prodi" => $this->input->post('id_prodi', true),
            "nama_prodi" => $this->input->post('nama_prodi', true),
            "jenjang" => $this->input->post('jenjang', true),
            "biaya" => $this->input->post('biaya', true),
            "akreditas" => $this->input->post('akreditas', true)
        ];

        $this->db->where('id_prodi', $this->input->post('id_prodi'));
        $this->db->update('tbl_prodi', $data);
    }
}