<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class KeyModel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();

      // nama tabel dalam database
      $this->userTbl = 'keys';
  }

  // untuk mengambil data
  function get($param)
  {
    $this->db->select('key');
    $this->db->where('user_id', $param);
    return $this->db->get($this->userTbl)->row_array();
  }

  // insert data
  public function insert($data)
  {
    //insert key ke database
    
    $insert = $this->db->insert($this->userTbl, $data);

    // return value
    return $insert ? $this->db->insert_id() : false;
  }
}
