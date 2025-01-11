<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Validasi Pembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('keuangan/index');
        $this->load->view('templates/footer');
    }
}