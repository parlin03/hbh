<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Hadir_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getDataTarget()
    {
        $this->db->select('dpt.namakec, if(namakec=panakkukang or namakec=biringkanaya, 5500, 4500) as total');
        // $this->db->select('dpt.namakec, count(id) as total');
        $this->db->from('dpt');
        // $this->db->join('kec', 'kec.namakec = dpt.namakec');
        $this->db->group_by('namakec');
        $this->db->order_by('idkec', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataCapaian()
    {

        $this->db->select('tahun, count(peserta.id) as total');
        $this->db->from('peserta');
        $this->db->join('angkatan', 'angkatan.tahun =peserta.angkatan', 'RIGHT');
        $this->db->group_by('tahun');
        $query = $this->db->get();
        return $query->result();
    }
    public function getPesertaTotal()
    {
        return $this->db->count_all('peserta');
    }


    public function getPencapaian()
    {
        $this->db->select('angkatan, count(id) as total');
        $this->db->from('peserta');
        // $this->db->join('(select namakec, count(dpt.id) as totaldpt from dpt group by namakec) as a', 'a.namakec = lks_tim50.namakec');
        $this->db->group_by('angkatan');
        $this->db->order_by('total', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPesertaRegistered()
    {
        $this->db->select('name, nim, angkatan, baju ');
        $this->db->where('hadir', 0);
        $this->db->order_by('angkatan,name', 'ASC');
        return $this->db->get('peserta')->result_array();
    }

    public function getLastDateTime()
    {
        // $this->db->select('date_created');
        // $this->db->from('peserta');
        // $this->db->order_by('id', 'DESC');
        // $this->db->limit(1);
        // $query = $this->db->get();
        // return $query->result();

        return $this->db->get("peserta")->row();
    }
}
