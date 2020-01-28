<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upnyk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upnyk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'UPN Veteran Yogyakarta - Kampusmana';
        $data['data'] = $this->Upnyk_model->getAllData();

        $this->load->view('template_kampus/header_kampus', $data);
        $this->load->view('upnyk/index', $data);
        $this->load->view('template_kampus/footer_kampus');
    }
}