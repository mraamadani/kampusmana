<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->library('form_validation');
        
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Prodi - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['prodi'] = $this->Prodi_model->getAllData();
        
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('prodi/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Prodi';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_prodi', 'ID Prodi', 'required|numeric');
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric');
        $this->form_validation->set_rules('akreditas', 'Akreditas', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('prodi/tambah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Prodi_model->tambahData();
           $this->session->set_flashdata('flash', 'ditambahkan');
           redirect('prodi');
        }
    }

    public function hapus($id)
    {
        $this->Prodi_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('prodi');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['prodi'] = $this->Prodi_model->getDataByID($id);

        $this->form_validation->set_rules('id_prodi', 'ID Prodi', 'required|numeric');
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric');
        $this->form_validation->set_rules('akreditas', 'Akreditas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('prodi/ubah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Prodi_model->ubahData();
           $this->session->set_flashdata('flash', 'diubah');
           redirect('prodi');
        }
    }
}