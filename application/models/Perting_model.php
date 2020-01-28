<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perting_model extends CI_model {
    public function getAllData()
    {
        return $this->db->get('tbl_perting')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "id_perting" => $this->input->post('id_perting', true),
            "nama_perting" => $this->input->post('nama_perting', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->insert('tbl_perting', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('tbl_perting', ['id_perting' => $id]);
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tbl_perting', ['id_perting' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "id_perting" => $this->input->post('id_perting', true),
            "nama_perting" => $this->input->post('nama_perting', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->where('id_perting', $this->input->post('id_perting'));
        $this->db->update('tbl_perting', $data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('nama_perting', $keyword);
        $this->db->or_like('link', $keyword);
        return $this->db->get('tbl_perting')->result_array();
    }
}