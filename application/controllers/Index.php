<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (empty($this->session->userdata('user_id'))) {
        //     redirect(site_url(), 'refresh');
        // }
        // $this->load->model('Dashboard_model', 'dashboard');
    }




    public function index()
    {
        $data['title'] = 'HBH Ikatek Unhas 2024';
        $data['user'] = $this->db->get_where('peserta', ['id' => $this->session->userdata('user_id')])->row_array();

        // $data['maingraph'] = $this->dashboard->mainGraph();
        // $data['graphpanakukkang'] = $this->dashboard->graphPanakukkang();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('index', $data);
        // $this->load->view('templates/footer');
    }
}
