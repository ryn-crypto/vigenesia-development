<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->userTbl = 'user';
    }

  
    // mengambil data user
    function getUser($param = '')
    {
        // cek apakah ada id yang dikirimkan
        if ($param == '') {
            $result = $this->db->get($this->userTbl)->result_array();
        } else {
            $this->db->where('iduser', $param);
            $result = $this->db->get($this->userTbl)->result_array();
        }
        return $result;
    }

    // menambah data user
    public function insert($data)
    {
        //add created and modified date if not exists
        if (!array_key_exists("tanggal_input", $data)) {
            $data['tanggal_input'] = date("Y-m-d H:i:s");
        }
        if (!array_key_exists("role_id", $data)) {
            $data['role_id'] = 2;
        }

        if (!array_key_exists("is_active", $data)) {
            $data['is_active'] = 1;
        }


        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);

        //return the status
        return $insert ? $this->db->insert_id() : false;
    }


    /*
     * Update user data
     */
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

    /*
     * Delete user data
     */
    public function delete($id)
    {
        //update user from users table
        $this->db->delete('user', array('iduser' => $id));
        $delete = $this->db->affected_rows();

        //return the status
        return $delete ? true : false;
    }
}
