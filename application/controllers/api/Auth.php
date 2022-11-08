<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


use Restserver\Libraries\REST_Controller;

class Auth extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel', 'auth');

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }
    
    // register function
    public function register_post()
    {
        // ambil data yang sikirim dari user
        $nama = strip_tags($this->post('nama'));
        $profesi = strip_tags($this->post('profesi'));
        $email = strip_tags($this->post('email'));
        $password = $this->post('password');

        // Validasi data yang dikirimkan
        if (!empty($nama)  && !empty($profesi) && !empty($email) && !empty($password)) {

            // Cek apakah email sudah terdaftar
            // Check if the given email already exists
            $con['returnType'] = 'count';
            $con['conditions'] = array(
                'email' => $email,
            );

            $userCount = $this->auth->getRows($con);
            
            // hasil dari pengecekan email
            if ($userCount > 0) {
                // Set response
                $this->response([
                    'status' => false,
                    'message' => 'The given email already exists'
                ], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                // jika email tidak ada insert user data
                $userData = array(
                    'nama' => $nama,
                    'profesi' => $profesi,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                );
                $insert = $this->auth->insert($userData);

                // Check iapakah user sudah terinput di database
                if ($insert) {
                    // Set the response and exit
                    $this->response([
                        'status' => TRUE,
                        'message' => 'The user has been added successfully.'
                    ], REST_Controller::HTTP_CREATED);
                } else {
                    // Set response
                    $this->response([
                        'status' => false,
                        'message' => 'Some problems occurred, please try again'
                    ], REST_Controller::HTTP_NOT_MODIFIED);
                }
            }
        // jika info yang di berikan tidak lengakap
        } else {
            // Set response
            $this->response([
                'status' => false,
                'message' => 'Provide complete user info to add'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    // login function
    public function login_post()
    {
        // ambil data yang dikirim user
        $email = $this->post('email');
        $password = $this->post('password');

        // validasi data yang dikirim
        if (!empty($email) && !empty($password)) {
            // cek apakah ada user yang sesuai dengan email
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email' => $email,
                'is_active' => 1
            );

            $user = $this->auth->getRows($con);
            if (!$user) {
                // jika email tidak terdaftar
                // Set response
                $this->response([
                    'status' => false,
                    'message' => 'an error occurred in the email'
                ], REST_Controller::HTTP_NOT_FOUND);
            } else {
                // jika email tersedia
                // cek apakah password sudah sesuai
                if (!password_verify($password, $user['password'])) {
                    // jika password tidak sesuai
                    // Set response
                    $this->response([
                        'status' => false,
                        'message' => 'password does not match'
                    ], REST_Controller::HTTP_CONFLICT);
                } else {
                    // jika password sudah sesuai
                    $this->response([
                        'status' => TRUE,
                        'message' => 'login success',
                        'data' => $user
                    ], REST_Controller::HTTP_ACCEPTED);
                }
            }
        } else {
            // jika tidak ada data yang dikirim
            // Set response
            $this->response([
                'status' => false,
                'message' => 'Provide complete email and password'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
