<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function index()
    {
        $data['title'] = 'About - Kampusmana';

        $this->load->view('template_kampus/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('template_kampus/footer');
    }
}