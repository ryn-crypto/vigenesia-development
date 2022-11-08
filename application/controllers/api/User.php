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

    // Menampilkan data user
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

    function index_put()
    {

        // Ambil data yang dikirimkan dari user
        $id = $this->put('iduser');
        $nama = strip_tags($this->put('nama'));
        $profesi = strip_tags($this->put('profesi'));
        $email = strip_tags($this->put('email'));
        $password = $this->put('password');


        // Validate the post data
        if (!empty($nama)  || !empty($profesi) || !empty($email) || !empty($password)) {
            
            // Update user data pada array
            $userData = array();

            // jika ada perubahan nama
            if (!empty($nama)) {
                $userData['nama'] = $nama;
            }
            // jika ada perubahan profesi
            if (!empty($profesi)) {
                $userData['profesi'] = $profesi;
            }
            // jika ada perubahan email
            if (!empty($email)) {
                $userData['email'] = $email;
            }
            // jika ada perubahan password
            if (!empty($password)) {
                // enkripsi pasword
                $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
                // decript pasword
                // password_verify($password, $user['password'])
            }

            // masukan ke model user
            $update = $this->user->update($userData, $id);

            // Cek update data
            if ($update) {
                // Set response
                $this->response([
                    'status' => TRUE,
                    'message' => 'update user profile success'
                ], REST_Controller::HTTP_OK);
            } else {
                // Set response
                $this->response([
                    'status' => false,
                    'message' => 'Some problems occurred, please try again.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            // Set response
            $this->response([
                'status' => false,
                'message' => 'Provide at least one user info to update.'
            ], REST_Controller::HTTP_BAD_REQUEST);
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
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
            
        }
    }
}
