<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

    public function index()
    {
        $this->load->view('dokumentasi/home');
    }
    
    public function auth()
    {
        $this->load->view('dokumentasi/authorize');
    }
    
    public function motivasi()
    {
        $this->load->view('dokumentasi/motivasi');
    }
    
    public function user()
    {
        $this->load->view('dokumentasi/user');
    }
    
    public function key()
    {
        $this->load->view('dokumentasi/key');
    }
}
