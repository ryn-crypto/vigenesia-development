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

    /*
     * Update materi data
     */
    public function update($data, $id)
    {
        //add modified date if not exists
        if (!array_key_exists("tanggal_update", $data)) {
            $data['tanggal_update'] = date("Y-m-d H:i:s");
        }

        //update materi data in materi table
        $update = $this->db->update($this->mTbl, $data, array('id' => $id));

        //return the status
        return $update ? true : false;
    }

    /*
     * Delete materi data
     */
    public function delete($id)
    {
        //update mater from materi table
        $delete = $this->db->delete('materi', array('id' => $id));
        //return the status
        return $delete ? true : false;
    }
}
