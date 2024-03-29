<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Peserta_model', 'peserta_m');
    }

    public function index()
    {
        $data['title'] = 'Peserta HBH Ikatek Unhas 2024';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris


        $data['pencapaian'] = $this->peserta_m->getPencapaian(); //array banyak
        $data['export'] = $this->peserta_m->getPesertaExport();


        // $Capaian = $this->peserta_model->getDataCapaian();

        $query = $this->db->query("SELECT angkatan, count(id) as total FROM peserta 
        GROUP BY angkatan ORDER BY angkatan ASC");

        $data['total'] = json_encode(array_column($query->result(), 'total'), JSON_NUMERIC_CHECK);
        $data['category'] = json_encode(array_column($query->result(), 'angkatan'), JSON_NUMERIC_CHECK);

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('peserta', $data);
        $this->load->view('templates/footer');
    }

    public function list()
    {
        $this->load->model('Peserta_model', 'peserta_model');
        // $target = $this->peserta_model->getDataTarget();

        $Capaian = $this->peserta_model->getDataCapaian();
        $rows1 = array();
        $rows1['name'] = 'angkatan';
        $rows1['type'] = 'column';
        foreach ($Capaian as $c) {
            $rows1['data'][] =  $c->total;
        }

        $result = array();
        array_push($result, $rows1);

        print json_encode($result, JSON_NUMERIC_CHECK);
    }

    public function Pie_list()
    {
        $graph = $this->peserta_m->getDataPie();

        $rows = array();
        foreach ($graph as $d) {
            array_push($rows, array($d->status, $d->jml_status));
        }

        print json_encode($rows, JSON_NUMERIC_CHECK);
    }
}
