<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_model {
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tbl_data AS A');
        $this->db->join('tbl_prodi AS B', 'B.kode_prodi = A.kode_prodi', 'INNER JOIN');
        $this->db->join('tbl_minat AS C', 'C.kode_minat = A.kode_minat', 'INNER JOIN');
        $this->db->join('tbl_perting AS D', 'D.kode_perting = A.kode_perting', 'INNER JOIN');

        // if($id != null) {
        //     $this->db->where('id', $id);
        // }
        $result = $this->db->get();
        return $result->result_array();
    }

    public function tambahData()
    {
        $data = [
            "id_prodi" => $this->input->post('id_prodi', true),
            "nama_prodi" => $this->input->post('nama_prodi', true),
            "jenjang" => $this->input->post('jenjang', true),
            "biaya" => $this->input->post('biaya', true),
            "akreditas" => $this->input->post('akreditas', true),
            "id_minat" => $this->input->post('id_minat', true),
            "nama_minat" => $this->input->post('nama_minat', true),
            "id_perting" => $this->input->post('id_perting', true),
            "nama_perting" => $this->input->post('nama_perting', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->insert('tbl_data', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('tbl_data', ['id' => $id]);
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tbl_data', ['id' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "id_prodi" => $this->input->post('id_prodi', true),
            "nama_prodi" => $this->input->post('nama_prodi', true),
            "jenjang" => $this->input->post('jenjang', true),
            "biaya" => $this->input->post('biaya', true),
            "akreditas" => $this->input->post('akreditas', true),
            "id_minat" => $this->input->post('id_minat', true),
            "nama_minat" => $this->input->post('nama_minat', true),
            "id_perting" => $this->input->post('id_perting', true),
            "nama_perting" => $this->input->post('nama_perting', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_data', $data);
    }

    public function cariData()
    {
        $this->db->select('nama_prodi, nama_minat, nama_perting, jenjang, biaya, akreditas, link');
        $this->db->from('tbl_data AS A');
        $this->db->join('tbl_prodi AS B', 'B.kode_prodi = A.kode_prodi', 'INNER JOIN');
        $this->db->join('tbl_minat AS C', 'C.kode_minat = A.kode_minat', 'INNER JOIN');
        $this->db->join('tbl_perting AS D', 'D.kode_perting = A.kode_perting', 'INNER JOIN');

        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('nama_minat', $keyword);
        $this->db->or_like('nama_prodi', $keyword);
        $this->db->or_like('nama_perting', $keyword);
        $this->db->or_like('akreditas', $keyword);
        $this->db->or_like('biaya', $keyword);
        $this->db->or_like('jenjang', $keyword);
        $this->db->or_like('link', $keyword);
        return $this->db->get()->result_array();
    }
}