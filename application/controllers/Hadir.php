<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Hadir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Hadir_model', 'hadir_m');
    }

    public function index()
    {
        $data['title'] = 'Peserta HBH Ikatek Unhas 2024';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris


        $data['pencapaian'] = $this->hadir_m->getPencapaian(); //array banyak
        $data['total'] = $this->hadir_m->getPesertaTotal();
        $data['register'] = $this->hadir_m->getPesertaRegistered();
        $data['tanggal'] = $this->hadir_m->getLastDateTime();

        // $Capaian = $this->peserta_model->getDataCapaian();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('hadir', $data);
        $this->load->view('templates/footer');
    }
}
