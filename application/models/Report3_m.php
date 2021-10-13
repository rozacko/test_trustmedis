<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report3_m extends CI_Model {

    public function get_data($dt)
    {   
        // if($dt['date'] != 'ALL'){
        //     $this->db->where("C.daftar_tanggal LIKE '".$dt['date']."%'");
        // }
        if($dt['unit_kode'] != 'ALL'){
            $this->db->where('E.unit_kode', $dt['unit_kode']);
        }
        if($dt['bayar_id'] != 'ALL'){
            $this->db->where('G.bayar_kode', $dt['bayar_id']);
        }
        if($dt['diagnosa'] != 'ALL'){
            $this->db->where('B.diagnosa_kode', $dt['diagnosa']);
        }
        
        $dt = $this->db            
            ->select('A.m_diagnosa_id,E.unit_nama,D.pasien_nama,D.pasien_kota,G.bayar_nama,A.diagnosapasien_jenis,B.diagnosa_name,F.pegawai_nama,C.daftar_tanggal,C.pulang_tanggal')
            ->from('diagnosa_pasien A')
            ->join('master_diagnosa B','A.m_diagnosa_id = B.diagnosa_id','LEFT')            
            ->join('kunjungan_pasien C','A.kunjungan_id = C.pendaftaran_id','LEFT')            
            ->join('master_pasien D','C.m_pasien_id = D.pasien_id','LEFT')            
            ->join('master_unit E','C.m_unit_id = E.unit_id','LEFT')            
            ->join('master_dokter F','A.m_dokter_id = F.pegawai_id','LEFT')            
            ->join('master_pembayaran G','C.m_bayar_id = G.bayar_id','LEFT')
            ->order_by('D.pasien_nama','ASC')
            ->order_by('A.diagnosapasien_jenis','DESC')
            ->get()
            ->result_array();
        // echo($this->db->last_query());die;
        return $dt;
    }

    public function get_data_pasien()
    {   
        $dt = $this->db            
            ->select('A.pasien_nama')
            ->from('master_pasien A')
            ->join('kunjungan_pasien B','A.pasien_id = B.m_pasien_id','LEFT')                        
            ->order_by('A.pasien_nama','ASC')
            ->group_by('A.pasien_nama')
            ->get()
            ->result_array();
        return $dt;
    }

    public function get_data_poli()
    {   
        $dt = $this->db            
            ->from('master_unit')
            ->order_by('unit_id','ASC')
            ->get()
            ->result_array();
        return $dt;
    }

    public function get_data_bayar()
    {   
        $dt = $this->db            
            ->from('master_pembayaran')
            ->order_by('bayar_id','ASC')
            ->get()
            ->result_array();
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