<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minat_model extends CI_model {
    public function getAllData()
    {
        return $this->db->get('tbl_minat')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "id_minat" => $this->input->post('id_minat', true),
            "nama_minat" => $this->input->post('nama_minat', true)
        ];

        $this->db->insert('tbl_minat', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('tbl_minat', ['id_minat' => $id]);
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tbl_minat', ['id_minat' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "id_minat" => $this->input->post('id_minat', true),
            "nama_minat" => $this->input->post('nama_minat', true)
        ];

        $this->db->where('id_minat', $this->input->post('id_minat'));
        $this->db->update('tbl_minat', $data);
    }
}