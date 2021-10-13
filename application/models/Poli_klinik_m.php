<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_klinik_m extends CI_Model {

    public function get_data()
    {   
        $dt = $this->db            
            ->from('master_unit')
            ->order_by('unit_id','ASC')
            ->get()
            ->result();
        return $dt;
    }

    public function get_max_id()
    {   
        $dt = $this->db            
            ->select('MAX(unit_id) as unit_id')                             
            ->from('master_unit')
            ->order_by('unit_id','ASC')
            ->get()
            ->row()->unit_id;
        return $dt;
    }

    public function save_add($data)
    {           
        $result = $this->db->insert('master_unit', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_unit
            where 
                unit_id = '".$id."'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('unit_id', $id);
        $result = $this->db->update('master_unit', $data);
        return $result;
    }

    public function deleted_data($id) {
        $this->db->where('unit_id', $id);
        return $this->db->delete('master_unit');
    }
}