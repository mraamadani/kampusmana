<?php

class Input_model extends CI_model {
    public function getAllData()
    {
        // $this->db->select('tbl_prodi.id_prodi, tbl_prodi.nama_prodi, tbl_prodi.jenjang, tbl_prodi.biaya, tbl_prodi.akreditas, tbl_minat.id_minat, tbl_minat.nama_minat, tbl_perting.id_perting, tbl_perting.nama_perting, tbl_perting.link');
        // $this->db->from('tbl_prodi'); 
        // $this->db->join('tbl_minat', 'tbl_prodi.id_prodi=tbl_minat.id_minat');
        // $this->db->join('tbl_perting', 'tbl_prodi.id_prodi=tbl_perting.id_perting');   
        // $query = $this->db->get();
        // return $query->result();
        
        return $this->db->get('tbl_prodi')->result_array();
        // SELECT tbl_prodi.id_prodi, tbl_prodi.nama_prodi, tbl_prodi.jenjang, tbl_prodi.biaya, tbl_prodi.akreditas, tbl_minat.id_minat, tbl_minat.nama_minat, tbl_perting.id_perting, tbl_perting.nama_perting, tbl_perting.link
        // FROM tbl_perting INNER JOIN (tbl_minat INNER JOIN tbl_prodi ON tbl_minat.id_minat=tbl_prodi.id_prodi) 
        // ON tbl_perting.id_perting=tbl_prodi.id_prodi;
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
            "akreditas" => $this->input->post('akreditas', true),
            "id_minat" => $this->input->post('id_minat', true),
            "nama_minat" => $this->input->post('nama_minat', true),
            "id_perting" => $this->input->post('id_perting', true),
            "nama_perting" => $this->input->post('nama_perting', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->where('id_prodi', $this->input->post('id_prodi'));
        $this->db->update('tbl_prodi', $data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('nama_minat', $keyword);
        $this->db->or_like('nama_prodi', $keyword);
        $this->db->or_like('nama_perting', $keyword);
        $this->db->or_like('akreditas', $keyword);
        $this->db->or_like('biaya', $keyword);
        $this->db->or_like('jenjang', $keyword);
        return $this->db->get('tbl_prodi')->result_array();
    }

    public function filterData()
    {
        $filter = $this->input->post('filter', true);
        $this->db->or_like('nama_minat', $filter);
        $this->db->or_like('nama_prodi', $filter);
        $this->db->or_like('nama_perting', $filter);
        $this->db->or_like('akreditas', $filter);
        $this->db->or_like('biaya', $filter);
        $this->db->or_like('jenjang', $filter);
        return $this->db->get('tbl_prodi')->result_array();
    }
}