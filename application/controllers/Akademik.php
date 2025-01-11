<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Akademik';
        $this->load->view('templates/header', $data);
        $this->load->view('akademik/index');
        $this->load->view('templates/footer');
    }
}