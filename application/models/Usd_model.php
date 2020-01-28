<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usd_model extends CI_model {
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tbl_data AS A');
        $this->db->join('tbl_prodi AS B', 'B.kode_prodi = A.kode_prodi', 'INNER JOIN');
        $this->db->join('tbl_minat AS C', 'C.kode_minat = A.kode_minat', 'INNER JOIN');
        $this->db->join('tbl_perting AS D', 'D.kode_perting = A.kode_perting', 'INNER JOIN');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getDataByID($id)
    {
        return $this->db->get_where('tbl_data', ['id' => $id])->row_array();
    }
}