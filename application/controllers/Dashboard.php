<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
  

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function tampilgrafik()
    {
        $data['title'] = 'Dashboard - Kampusmana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $bar_graph = $this->jpgraph->barchart();
        $datax = array(2,10,20);
        $datay = array("rendah","sedang","bagus");
       
        $graph = new PieGraph(400,270,"auto");
        $graph->SetScale('textint');
        $graph->img->SetMargin(50,30,70,100);
        $graph->SetShadow();
              
        $bplot = new PiePlot3D($datax);
        $bplot->SetCenter(0.45,0.40);
        $bplot->SetLegends($datay);
        $bplot->value->Show();
        $bplot->value->SetFont(FF_ARIAL,FS_BOLD);
               
        $graph->Add($bplot);
        $graph->Stroke();   

        
        $this->load->library('jpgraph');
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar_2', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template_admin/footer');
    }
}
