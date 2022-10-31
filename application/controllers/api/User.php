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
        $this->response($result_api, 200);
    }

    function index_delete()
    {
        // ambil iduser yang dikirimkan
        $id = $this->delete('iduser');

        // query di model
        $result_api = $this->user->delete($id);

        // cek apakah ada data yang terhapus
        if ($result_api) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }
}
