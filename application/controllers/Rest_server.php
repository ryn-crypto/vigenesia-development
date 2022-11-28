<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_server extends CI_Controller {

    public function index()
    {
        $this->load->view('Home');
    }

    public function dokumentasi()
    {
        $this->load->view('templates/header');
        $this->load->view('dokumentasi');
        $this->load->view('templates/footer');
    }
}
