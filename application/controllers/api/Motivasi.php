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

    public function index_get()
    {
        // ambil data yang dikirim client
        $iduser = $this->get('iduser');
        $tanggal_input = $this->get('tanggal_input');

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

    public function index_post()
    {
        // ambil data yang dikirim client dan masukan kedalam array
        $motivasi = $this->input->post("isi_motivasi");
        $idUser = $this->input->post("iduser");
        $tanggal_input = date("Y-m-d");

        // cek id user
        // load model
        $this->load->model('userModel');
        // ambil data user menggunakan iduser yang dikirim client
        $user = $this->userModel->getUser($idUser);
        
        // cek apakah id user telah terdaftar
        if (!$user) {
            // response
            $this->response([
                'status' => false,
                'message' => 'user with Id not registered'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            // siapkan data untuk di input
            $dataInsert = array(
                'isi_motivasi' => $motivasi,
                'iduser' => $idUser,
                'tanggal_input' => $tanggal_input,
                'tanggal_update' => $tanggal_input
            );

            // masukan data menggunakan model
            $insert = $this->motivasi->insert($dataInsert);

            // response
            $this->response([
                'status' => TRUE,
                'message' => 'Motivasi added successfully',
            ], REST_Controller::HTTP_CREATED);
        }
    } 

    public function index_put()
    {
        // ambil data 
        $id = $this->put('id_motivasi');
        $isi_motivasi = strip_tags($this->put('isi_motivasi'));

        // Validasi data
        if (!empty($isi_motivasi)) {

            // Update motivasi
            if (!empty($isi_motivasi)) {
                $Data = [
                    'isi_motivasi'   => $isi_motivasi,
                    'tanggal_update' => date("Y-m-d")
                ];
            }
            $update = $this->motivasi->update($Data, $id);

            // cek apakah data sudah di update
            if ($update) {
                // set response
                $this->response([
                    'status' => TRUE,
                    'message' => 'Motivasi update successfully'
                ], REST_Controller::HTTP_OK);
            } else {
                // Set response
                $this->response([
                    'status' => FALSE,
                    'message' => 'Some problems occurred, please try again'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            // Set response
            $this->response([
                'status' => false,
                'message' => 'provide an least one user info to update'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    // delete motivasi
    public function index_delete()
    {
        // ambil data yang dikirim oleh client
        $idMotivasi = $this->delete('id_motivasi');

        // menggunakan model
        $result = $this->motivasi->delete($idMotivasi);

        // cek apakah dat sudah terdelete
        if ($result) {
            // response
            $this->response([
                'status'  => TRUE,
                'message' => 'motivasi was delete',
            ], REST_Controller::HTTP_OK);
        } else {
            // response
            $this->response([
                'status'  => FALSE,
                'message' => 'id Motivasi not found',
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
