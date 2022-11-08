<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        // nama tabel dalam database
        $this->userTbl = 'user';
    }

    // get email untuk mengambil email
    function getEmail($param)
    {
        $this->db->from($this->userTbl);
        $this->db->where('email', $param);
        return $this->db->count_all_results();
    }

    // insert data
    public function insert($data)
    {
        // tambahkan tanggal input
        if (!array_key_exists("tanggal_input", $data)) {
            $data['tanggal_input'] = date("Y-m-d H:i:s");
        }
        // tambahkan role_id
        if (!array_key_exists("role_id", $data)) {
            $data['role_id'] = 2;
        }
        // tambahkan is_active
        if (!array_key_exists("is_active", $data)) {
            $data['is_active'] = 1;
        }

        // insert ke database
        $insert = $this->db->insert($this->userTbl, $data);        
        return $this->db->affected_rows();
    }


    // update data
    public function update($data, $id)
    {
        //add modified date if not exists
        if (!array_key_exists('modified', $data)) {
            $data['modified'] = date("Y-m-d H:i:s");
        }

        //update user data in users table
        $update = $this->db->update($this->userTbl, $data, array('iduser' => $id));

        //return the status
        return $update ? true : false;
    }

    // delete data 
    public function delete($id)
    {
        //update user from users table
        $delete = $this->db->delete('user', array('iduser' => $id));
        //return the status
        return $delete ? true : false;
    }
}
