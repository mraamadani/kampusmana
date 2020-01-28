<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_model {
    public function getData()
    {
        $this->db->select('id_prodi, nama_prodi, COUNT(nama_prodi) as total');
        $this->db->group_by('nama_prodi'); 
        $this->db->order_by('total', 'desc');
        $result = $this->db->get('tbl_prodi');
        return $result->result_array();
    }
}