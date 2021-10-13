<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {

    public function get_data()
    {   
        $dt = $this->db            
            ->from('master_dokter')
            ->order_by('pegawai_id','ASC')
            ->get()
            ->result();
        return $dt;
    }

    public function get_max_id()
    {   
        $dt = $this->db            
            ->select('MAX(pegawai_id) as pegawai_id')                             
            ->from('master_dokter')
            ->order_by('pegawai_id','ASC')
            ->get()
            ->row()->pegawai_id;
        return $dt;
    }

    public function save_add($data)
    {
        $result = $this->db->insert('master_dokter', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_dokter
            where 
                pegawai_id = '".$id."'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('pegawai_id', $id);
        $result = $this->db->update('master_dokter', $data);
        return $result;
    }

    public function deleted_data($id) {
        $this->db->where('pegawai_id', $id);
        return $this->db->delete('master_dokter');
    }
}