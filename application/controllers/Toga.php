<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toga extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Validasi Toga';
        $this->load->view('templates/header', $data);
        $this->load->view('toga/index');
        $this->load->view('templates/footer');
    }
}