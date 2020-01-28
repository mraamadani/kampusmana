<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ugm extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ugm_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Universitas Gadjah Mada - Kampusmana';
        $data['data'] = $this->Ugm_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('ugm/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}