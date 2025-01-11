<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Validasi Foto';
        $this->load->view('templates/header', $data);
        $this->load->view('foto/index');
        $this->load->view('templates/footer');
    }
}