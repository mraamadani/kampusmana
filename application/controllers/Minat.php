<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Minat_model');
        $this->load->library('form_validation');
        
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Minat - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kampus'] = $this->Minat_model->getAllData();
        
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('minat/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Minat';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_minat', 'ID Minat', 'required|numeric');
        $this->form_validation->set_rules('nama_minat', 'Nama Minat', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('minat/tambah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Minat_model->tambahData();
           $this->session->set_flashdata('flash', 'ditambahkan');
           redirect('minat');
        }
    }

    public function hapus($id)
    {
        $this->Minat_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('minat');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Minat';
        $data['kampus'] = $this->Minat_model->getDataByID($id);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_minat', 'ID Minat', 'required|numeric');
        $this->form_validation->set_rules('nama_minat', 'Nama Minat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('minat/ubah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Minat_model->ubahData();
           $this->session->set_flashdata('flash', 'diubah');
           redirect('minat');
        }
    }
}