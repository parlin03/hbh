<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Thanks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Registrasi Peserta HBH IKATEK UNHAS 2024';
        $data['name'] = $this->session->flashdata('name');

        // $data['angkatan'] = $this->db->get('angkatan')->result_array();
        $this->load->view('templates/auth_header', $data);
        $this->load->view('thanks', $data);
        $this->load->view('templates/auth_footer');
    }
}
