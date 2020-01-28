<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uajy extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uajy_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Universitas Atma Jaya - Kampusmana';
        $data['data'] = $this->Uajy_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('uajy/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}