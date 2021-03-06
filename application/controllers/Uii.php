<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uii extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uii_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Universitas Islam Indonesia - Kampusmana';
        $data['data'] = $this->Uii_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('uii/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}