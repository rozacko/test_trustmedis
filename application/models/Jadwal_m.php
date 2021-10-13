<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_m extends CI_Model {

    public function get_data()
    {   
        $dt = $this->db            
            ->select('A.jadwal_id,A.unit_kode,A.pegawai_nomor,A.v1,A.v2,A.v3,A.v4,A.v5,A.v6,A.v7,B.unit_nama,C.pegawai_nama')
            ->from('master_jadwal A')
            ->join('master_unit B','A.unit_kode = B.unit_kode','LEFT')
            ->join('master_dokter C','A.pegawai_nomor = C.pegawai_nomor','LEFT')
            ->order_by('A.jadwal_id','ASC')
            ->get()
            ->result_array();
        // echo($this->db->last_query());die;
        return $dt;
    }

    public function get_data_master_poli()
    {   
        $dt = $this->db    
            ->select('A.unit_kode,B.unit_nama')
            ->from('master_jadwal A')
            ->join('master_unit B','A.unit_kode = B.unit_kode','LEFT')
            ->order_by('A.unit_kode','ASC')
            ->group_by('A.unit_kode')
            ->get()
            ->result_array();
        // echo($this->db->last_query());die;
        return $dt;
    }

    public function get_data_poli()
    {   
        $dt = $this->db            
            ->from('master_unit')
            ->order_by('unit_id','ASC')
            ->get()
            ->result();
        return $dt;
    }

    public function get_data_dokter()
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
            ->select('MAX(jadwal_id) as jadwal_id')                             
            ->from('master_jadwal')
            ->order_by('jadwal_id','ASC')
            ->get()
            ->row()->jadwal_id;
        return $dt;
    }

    public function save_add($data)
    {           
        $result = $this->db->insert('master_jadwal', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_jadwal
            where 
                jadwal_id = '".$id."'
        ";
        $result = $this->db->query($qy)->result_array();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('jadwal_id', $id);
        $result = $this->db->update('master_jadwal', $data);
        return $result;
    }

    public function deleted_data($id) {
        $this->db->where('jadwal_id', $id);
        return $this->db->delete('master_jadwal');
    }
}