<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usd extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usd_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Universitas Sanata Dharma - Kampusmana';
        $data['data'] = $this->Usd_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('usd/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}