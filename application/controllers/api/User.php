<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


use Restserver\Libraries\REST_Controller;

class User extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        
        $this->load->model('UserModel', 'user');

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }

    //Menampilkan data user
    function index_get()
    {
        $id = $this->get('iduser');

        // cek apakah ada id user yang dikirim
        if ($id == '') {
            $result_api = $this->user->getUser();
        } else {
            $result_api = $this->user->getUser($id);
        }

        if ($result_api) {
            $this->response([
                'status' => TRUE,
                'data' => $result_api
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    function index_delete()
    {
        // ambil iduser yang dikirimkan
        $id = $this->delete('iduser');

        // cek apakah ada id yang dikirim
        if (!$id) {
            // jika tidak ada id yang dikirim
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            // query di model
            $result_api = $this->user->delete($id);
            
            // cek apakah ada data yang terhapus
            if ($result_api > 0) {
                $this->response([
                    'status' => TRUE,
                    'message' => 'deleted success'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
            
        }
    }
}
