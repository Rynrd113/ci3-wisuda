<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
        // Load halaman login
        $this->load->view('login');
    }

    public function submit() {
        
        //Sementara hanya redirect ke halaman dashboard
        redirect('dashboard');
    }
}
