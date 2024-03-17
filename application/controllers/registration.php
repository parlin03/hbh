<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function Index()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim|is_unique[peserta.nim]', [
            'is_unique' => 'Stambuk/NIM ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
        $this->form_validation->set_rules('baju', 'Ukuran Baju', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('hp', 'No Telpon', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        //     'is_unique' => 'This email has already registered'
        // ]);
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Peserta HBH IKATEK UNHAS 2024';
            $data['angkatan'] = $this->db->get('angkatan')->result_array();
            $this->load->view('templates/auth_header', $data);
            $this->load->view('registration');
            $this->load->view('templates/auth_footer');
        } else {
            // $email = $this->input->post('email', true);
            $data = [
                'name' => htmlentities($this->input->post('name', true)),
                'nim' => htmlentities($this->input->post('nim', true)),
                'angkatan' => htmlentities($this->input->post('angkatan', true)),
                'baju' => htmlentities($this->input->post('baju', true)),
                'gender' => htmlentities($this->input->post('gender', true)),
                'alamat' => htmlentities($this->input->post('alamat', true)),
                'hp' => htmlentities($this->input->post('hp', true)),
                'role_id' => 9,
                'is_active' => 1,
                'date_created' => time()

            ];

            // siapkan token
            // $token = base64_encode(openssl_random_pseudo_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];

            $this->db->insert('peserta', $data);
            // $this->db->insert('user_token', $user_token);
            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('name', $data['name']);

            // $this->session->set_flashdata('message', '<div class="alert alert-success" role ="alert">Selamat anda sudah terdaftar sebagai peserta HBH IKATEK UNHAS 2024</div>');
            redirect('thanks', $data);
        }
    }
}
