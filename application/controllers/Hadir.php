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



        $data['register'] = $this->hadir_m->getPesertaRegistered();
        $data['hadir'] = $this->hadir_m->getPesertaHadir();
        $data['tanggal'] = $this->hadir_m->getLastDateTime();

        // $Capaian = $this->peserta_model->getDataCapaian();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('hadir', $data);
        $this->load->view('templates/footer');
    }
    public function check($id = null)
    {
        $this->db->set('hadir', '1');
        $this->db->where('id', $id);
        $this->db->update('peserta'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role ="alert">Data Berhasil Dihapus');

        redirect('hadir');
    }
    public function uncheck($id = null)
    {
        $this->db->set('hadir', '0');
        $this->db->where('id', $id);
        $this->db->update('peserta'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role ="alert">Data Berhasil Dihapus');

        redirect('hadir');
    }
}
