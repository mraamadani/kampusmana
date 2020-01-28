<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perting_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Perguruan Tinggi - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kampus'] = $this->Perting_model->getAllData();
        
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('perting/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Perting';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_perting', 'ID Perting', 'required|numeric');
        $this->form_validation->set_rules('nama_perting', 'Nama Perting', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('perting/tambah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Perting_model->tambahData();
           $this->session->set_flashdata('flash', 'ditambahkan');
           redirect('perting');
        }
    }

    public function hapus($id)
    {
        $this->Perting_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('perting');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Perting';
        $data['kampus'] = $this->Perting_model->getDataByID($id);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('id_perting', 'ID Perting', 'required|numeric');
        $this->form_validation->set_rules('nama_perting', 'Nama Perting', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('template_admin/topbar_2', $data);
            $this->load->view('perting/ubah', $data);
            $this->load->view('template_admin/footer');
        } else {
           $this->Perting_model->ubahData();
           $this->session->set_flashdata('flash', 'diubah');
           redirect('perting');
        }
    }
}
