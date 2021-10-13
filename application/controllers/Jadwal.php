<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jadwal_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Jadwal');
        $this->load->view('templates/footer');

    }

    function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data() {

        $jadwal = $this->Jadwal_m->get_data();
        $data_poli = $this->Jadwal_m->get_data_master_poli();
        $i = 0;
        $aa = 1;
        foreach ($data_poli as $k => $v) {
            $dt_final[$i]['no'] = $aa;
            $dt_final[$i]['klinik'] = '<b>'.$v['unit_nama'].'</b>';
            $dt_final[$i]['jadwal_id'] = '';
            $dt_final[$i]['action'] = 0;
            for ($a=1; $a<=7 ; $a++) { 
                $dt_final[$i]['v'.$a] = '';
            }
            $i++;
            foreach ($jadwal as $kk => $vv) {
                if($vv['unit_nama'] == $v['unit_nama']){
                    $dt_final[$i]['no'] = '';
                    $dt_final[$i]['action'] = 1;
                    $dt_final[$i]['jadwal_id'] = $vv['jadwal_id'];
                    $dt_final[$i]['klinik'] = $vv['pegawai_nama'];
                    for ($a=1; $a<=7 ; $a++) { 
                        if($vv['v'.$a] != '0-0'){
                            $jam = explode('-',$vv['v'.$a]);
                            $print_jam1 = $jam[0] <= 9 ? '0'.$jam[0].':00' : $jam[0].':00';
                            $print_jam2 = $jam[1] <= 9 ? '0'.$jam[1].':00' : $jam[1].':00';
                            $dt_final[$i]['v'.$a] = '<center>'.$print_jam1.'-'.$print_jam2.'</center>';
                        }
                        else
                            $dt_final[$i]['v'.$a] = '';
                    }
                    $i++;                                    
                }
            }
            $aa++;
        }
        $object = json_decode(json_encode($dt_final), FALSE);    
        // $this->echopre($object);die;
        echo json_encode(array('response' => $object));        
    }

    public function get_data_poli() {
        $poli = $this->Jadwal_m->get_data_poli();        
        echo json_encode($poli);
    }
    public function get_data_dokter() {
        $dokter = $this->Jadwal_m->get_data_dokter();        
        echo json_encode($dokter);
    }

    public function get_data_jam() {
        $dokter = $this->Jadwal_m->get_data_dokter();
        $jam[0] = array(
            'ID' => 0,
            'DESCRIPTION' => "Kosong",
        );
        for ($i=1; $i<=24 ; $i++) { 
            if($i <= 9)
                $DESC ='0'.$i.':00';
            else
                $DESC =$i.':00';

            $jam[$i] = array(
                'ID' => $i,
                'DESCRIPTION' => $DESC,
            );
        }        
        // $this->echopre($jam);die;
        echo json_encode($jam);
    }

    public function save_add(){
        $max_id = $this->Jadwal_m->get_max_id();                        
        // $this->echopre($_POST);die;
        $data = array(
            'jadwal_id' => ($max_id+1),
            'unit_kode' => $this->input->post('unit_kode'),
            'pegawai_nomor' => $this->input->post('pegawai_nomor'),
            'v1' => $this->input->post('v1'),
            'v2' => $this->input->post('v2'),
            'v3' => $this->input->post('v3'),
            'v4' => $this->input->post('v4'),
            'v5' => $this->input->post('v5'),
            'v6' => $this->input->post('v6'),
            'v7' => $this->input->post('v7'),
        );
        
        $result = $this->Jadwal_m->save_add($data);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function get_data_by_id($id) {

        $jadwal = $this->Jadwal_m->get_data_by_id($id);
        foreach ($jadwal as $key => $value) {
            $data['jadwal_id'] = $value['jadwal_id'];
            $data['unit_kode'] = $value['unit_kode'];
            $data['pegawai_nomor'] = $value['pegawai_nomor'];
            for ($a=1; $a<=7 ; $a++) { 
                $jam = explode('-',$value['v'.$a]);
                $data['v'.$a.'_1'] = $jam[0];
                $data['v'.$a.'_2'] = $jam[1];
            }
        }
        $data_obj = (object)$data;
        // $this->echopre($data_obj);die;
        echo json_encode($data_obj);
        
    }

    public function save_edit(){
        $id = $this->input->post('jadwal_id');        
        $data = array(
            'unit_kode' => $this->input->post('unit_kode'),
            'pegawai_nomor' => $this->input->post('pegawai_nomor'),
            'v1' => $this->input->post('v1'),
            'v2' => $this->input->post('v2'),
            'v3' => $this->input->post('v3'),
            'v4' => $this->input->post('v4'),
            'v5' => $this->input->post('v5'),
            'v6' => $this->input->post('v6'),
            'v7' => $this->input->post('v7'),
        );
        $result = $this->Jadwal_m->save_edit($data,$id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function save_delete(){
        $id = $this->input->post('id');        
        $result = $this->Jadwal_m->deleted_data($id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }
}