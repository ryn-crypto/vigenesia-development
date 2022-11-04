<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


use Restserver\Libraries\REST_Controller;

class Motivasi extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('MotivasiModel', 'motivasi');
        

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }

    function index_get()
    {
        $iduser = $this->get('iduser');
        $tanggal_input = $this->get('tanggal_input');

        // test apakah ada id yang dikirim
        // if (!$iduser) {
        //     $api = $this->motivasi->getMotivasi();
        // } else {
        //     if ($this->motivasi->getMotivasi($iduser)) {
        //         $api = $this->motivasi->getMotivasi($iduser);
        //     } else {
                
        //     }
        // }

        // cek apakah ada id user
        if ($iduser) {
            if (!$this->motivasi->getMotivasi($iduser)) {
                // response
                $this->response([
                    'status' => false,
                    'message' => 'motivasi with id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            } else {
                // query
                $api = $this->motivasi->getMotivasi($iduser);
                // response
                $this->response([
                    'status' => TRUE,
                    'data' => $api
                ], REST_Controller::HTTP_OK);
            }
        } else {
            // query
            $api = $this->motivasi->getMotivasi();
            // response
            $this->response([
                'status' => TRUE,
                'data' => $api
            ], REST_Controller::HTTP_OK);
        }
    }
}
