<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report2_m extends CI_Model {

    public function get_data($pasien_kota,$diagnosa_kode)
    {   
        if($pasien_kota != 'ALL'){
            $this->db->where('D.pasien_kota',$pasien_kota);
        }
        if($diagnosa_kode != 'ALL'){
            $this->db->where('B.diagnosa_kode',$diagnosa_kode);
        }
        $dt = $this->db            
            ->select('COUNT(A.m_diagnosa_id) as Jumlah, A.m_diagnosa_id,B.diagnosa_kode,B.diagnosa_name,D.pasien_kota')
            ->from('diagnosa_pasien A')
            ->join('master_diagnosa B','A.m_diagnosa_id = B.diagnosa_id','LEFT')            
            ->join('kunjungan_pasien C','A.kunjungan_id = C.pendaftaran_id','LEFT')            
            ->join('master_pasien D','C.m_pasien_id = D.pasien_id','LEFT')            
            ->group_by('A.m_diagnosa_id')
            ->order_by('Jumlah','DESC')
            ->limit(10)
            ->get()
            ->result_array();
        // echo($this->db->last_query());die;
        return $dt;
    }

    public function get_data_kota()
    {   
        $dt = $this->db            
            ->select('pasien_kota')
            ->from('master_pasien')
            ->order_by('pasien_kota','ASC')
            ->group_by('pasien_kota')
            ->get()
            ->result_array();
        return $dt;
    }

    public function get_data_diagnosa()
    {   
        $dt = $this->db            
            ->from('master_diagnosa')
            ->order_by('diagnosa_id','ASC')
            ->get()
            ->result_array();
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