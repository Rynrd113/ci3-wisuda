<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $this->load->view('templates/header', $data);
        $this->load->view('landing/index');
        $this->load->view('templates/footer');
    }
}