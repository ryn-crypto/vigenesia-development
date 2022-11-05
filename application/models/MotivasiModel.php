<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class motivasiModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->mTbl = 'motivasi';
    }


    public function getMotivasi($param = null)
    {
        // cek parameter
        if (!$param) {
            $this->db->order_by('tanggal_input', 'DESC');
            return $this->db->get('motivasi')->result();
        } else {
            $this->db->where('iduser', $param);
            return $this->db->get('motivasi')->result();
        }
    }
    
    // insert ke tabel motivasi 
    public function insert($data)
    {
        //insert motivasi ke database
        $insert = $this->db->insert($this->mTbl, $data);

        // return value
        return $insert ? $this->db->insert_id() : false;
    }

    
    // update data motivasi
    public function update($data, $id)
    {
        //update data pada tabel
        $update = $this->db->update($this->mTbl, $data, array('id' => $id));

        //return the status
        return $this->db->affected_rows();
        
    }

    // delete data motivasi
    public function delete($id)
    {
        //query ke database
        $delete = $this->db->delete($this->mTbl, array('id' => $id));
        
        // return value
        return $this->db->affected_rows();
    }
}
