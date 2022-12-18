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
        // load library
        $this->load->library('form_validation');
		$this->load->model('AuthModel', 'Auth');
		$this->load->model('KeyModel', 'Key');
        $this->load->model('UserModel', 'User');
        $this->load->helper('string');

        // form rules
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', 
		[
			'required' => 'email harus diisi!',
			'valid_email' => 'email tidak valid!'
		]);
        $this->form_validation->set_rules('password', 'Password', 'required', 
		[
			'required' => 'password harus di isi!'
		]);

        // if rules not runing
        if(!$this->form_validation->run()) {
            // untuk menyimpan key
            $data = ['key' => 'key akan muncul disini'];
			
            $this->load->view('dokumentasi/key', $data);
		} else {
            // a data available to register
			$data = [
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			];

            // cek in database if alredy registered
            $con['conditions'] = array(
                'email' => $data['email'],
            );

            $dataUser = $this->Auth->getRows($con);

            // jika email user sudah terdaftar
            if ($dataUser) {
                // cek apakah api key tersedia
                $result = $this->Key->get($dataUser[0]['iduser']);

                // jika belum ada api key
                if (!$result) {
                    // buat key baru
                    $newkey = random_string('alnum',6);
                    // siapkan data untuk masuk ke database
                    $key_create = [
                        'user_id'  =>  $dataUser[0]['iduser'],
                        'key' => $newkey,
                        'level' => 1,
                        'date_created'   => date("Y-m-d H:i:s")
                    ];

                    // jika data sudah masuk ke database
                    if($this->Key->insert($key_create))
                    {
                        $data = ['key' =>  $newkey];
                        // return with data key
                        $this->session->set_flashdata('message', '<small class="alert text-success" role="alert">Email anda sudah terdaftar. silahkan gunakan Api-Key sesuai kebutuhan <?= $data; ?></small>');

                        $this->load->view('dokumentasi/show_key', $data);
                    } else {
                        // jika gagal insert ke database
                        $this->session->set_flashdata('message', '<small class="alert text-danger" role="alert">Ulangi Pendaftaran</small>');

                        redirect('Dokumentasi/key');
                    }
                // jika sudah ada api key
                } else {
                    $data = $result;
                    // return with data key
                    $this->session->set_flashdata('message', '<small class="alert text-success" role="alert">Email anda sudah terdaftar. silahkan gunakan Api-Key sesuai kebutuhan <?= $data; ?> </small>');

                    $this->load->view('dokumentasi/show_key', $data);
                }
            // jika email belum terdaftar
            } else {
                // insert data user
                $this->User->insert($data);

                // ambil id user
                $dataUser = $this->Auth->getRows($con);

                // buat key baru
                $newkey = random_string('alnum',6);
                // siapkan data untuk masuk ke database
                $key_create = [
                    'user_id'  =>  $dataUser[0]['iduser'],
                    'key' => $newkey,
                    'level' => 1,
                    'date_created'   => date("Y-m-d H:i:s")
                ];

                // jika data sudah masuk ke database
                if($this->Key->insert($key_create))
                {
                    $data = ['key' =>  $newkey];
                    // return with data key
                    $this->session->set_flashdata('message', '<small class="alert text-success" role="alert">Email anda sudah terdaftar. silahkan gunakan Api-Key sesuai kebutuhan <?= $data; ?></small>');

                    $this->load->view('dokumentasi/show_key', $data);
                } else {
                    // jika gagal insert ke database
                    $this->session->set_flashdata('message', '<small class="alert text-danger" role="alert">Ulangi Pendaftaran</small>');

                    redirect('Dokumentasi/key');
                }
            }


			// $this->AuthModel->insert($data);
			
			// $this->session->set_flashdata('message', '<small class="alert text-success" role="alert">Selamat! akun anda sudah terdaftar. silahkan gunakan Api-Key sesuai kebutuhan</small>');

			// redirect('Dokumentasi/key', $data);
		}
    }
}
