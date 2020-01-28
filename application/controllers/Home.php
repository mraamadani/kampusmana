<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home - Kampusmana';
        $data['kampus'] = $this->Data_model->getAllData();
        if ($this->input->post('keyword')) {
            $data['kampus'] = $this->Data_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function filter()
    {
        $data['title'] = 'Home - Kampusmana';
        $data['kampus'] = $this->Input_model->getAllData();
        if ($this->input->post('filter')) {
            $data['kampus'] = $this->Input_model->filterData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}