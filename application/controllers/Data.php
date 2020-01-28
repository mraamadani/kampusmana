<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Form Index Data - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Data_model->getAllData();
        
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('data/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $this->form_validation->set_rules('id_prodi', 'ID Prodi', 'required|numeric');
        // $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required');
        // $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        // $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric');
        // $this->form_validation->set_rules('akreditas', 'Akreditas', 'required');
        // $this->form_validation->set_rules('id_minat', 'ID Minat', 'required|numeric');
        // $this->form_validation->set_rules('nama_minat', 'Nama Minat', 'required');
        // $this->form_validation->set_rules('id_perting', 'ID Perting', 'required|numeric');
        // $this->form_validation->set_rules('nama_perting', 'Nama Perting', 'required');
        // $this->form_validation->set_rules('link', 'Link', 'required');
        
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('template_admin/header', $data);
        //     $this->load->view('template_admin/sidebar', $data);
        //     $this->load->view('template_admin/topbar_2', $data);
        //     $this->load->view('data/tambah', $data);
        //     $this->load->view('template_admin/footer');
        // } else {
        //    $this->Data_model->tambahData();
        //    $this->session->set_flashdata('flash', 'ditambahkan');
        //    redirect('data');
        // }
    }

    public function hapus($id)
    {
        $this->Input_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('input');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data';
        $data['kampus'] = $this->Input_model->getDataByID($id);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_prodi', 'ID Prodi', 'required|numeric');
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric');
        $this->form_validation->set_rules('akreditas', 'Akreditas', 'required');
        $this->form_validation->set_rules('id_minat', 'ID Minat', 'required|numeric');
        $this->form_validation->set_rules('nama_minat', 'Nama Minat', 'required');
        $this->form_validation->set_rules('id_perting', 'ID Perting', 'required|numeric');
        $this->form_validation->set_rules('nama_perting', 'Nama Perting', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('input/ubah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Input_model->ubahData();
           $this->session->set_flashdata('flash', 'diubah');
           redirect('input');
        }
    }
}