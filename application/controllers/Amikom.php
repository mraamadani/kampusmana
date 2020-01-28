<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Amikom extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Amikom_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Amikom - Kampusmana';
        $data['data'] = $this->Amikom_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('amikom/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}