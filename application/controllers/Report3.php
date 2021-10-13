<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Report3_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Report3');
        $this->load->view('templates/footer');

    }

    function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data($date,$unit_kode,$bayar_id,$diagnosa) {
        $_POST['date'] = $date;
        $_POST['unit_kode'] = $unit_kode;
        $_POST['bayar_id'] = $bayar_id;
        $_POST['diagnosa'] = $diagnosa;
        $data = $this->Report3_m->get_data($_POST);
        $data_pasien = $this->Report3_m->get_data_pasien($_POST);
        $i = 0;
        if(!empty($data)){
            foreach ($data_pasien as $key => $value) {
                $inx_1 = 1;
                $inx_2 = 1;
                $inx_3 = 1;
                foreach ($data as $k => $v) {            
                    if($value['pasien_nama'] == $v['pasien_nama']){
                        $dt_final[$i]['poli'] =  $v['unit_nama'];
                        $dt_final[$i]['nama'] =  $v['pasien_nama'];
                        $dt_final[$i]['kota'] =  $v['pasien_kota'];
                        $dt_final[$i]['bayar'] =  $v['bayar_nama'];
                        if($v['diagnosapasien_jenis'] == 'UTAMA'){
                            $dt_final[$i]['diagnosa'] = $inx_1.'. '.$v['diagnosapasien_jenis'].' | '. $v['diagnosa_name'];
                            $inx_1++;
                        }else if($v['diagnosapasien_jenis'] == 'SEKUNDER'){
                            $dt_final[$i]['diagnosa'] = $inx_2.'. '.$v['diagnosapasien_jenis'].' | '. $v['diagnosa_name'];
                            $inx_2++;
                        }else{
                            $dt_final[$i]['diagnosa'] = $inx_3.'. '.$v['diagnosapasien_jenis'].' | '. $v['diagnosa_name'];
                            $inx_3++;
                        }
                        $dt_final[$i]['dokter'] = $v['pegawai_nama'];
                        $dt_final[$i]['masuk'] = substr($v['daftar_tanggal'], 0,19);
                        $dt_final[$i]['pulang'] = substr($v['pulang_tanggal'], 0,19);
                        $i++;
                    }                    
                }       
            }            
        }else{
            $dt_final[$i]['poli'] =  '';
            $dt_final[$i]['nama'] =  'Data is null';
            $dt_final[$i]['kota'] =  '';
            $dt_final[$i]['bayar'] =  '';
            $dt_final[$i]['diagnosa'] = '';
            $dt_final[$i]['dokter'] = '';
            $dt_final[$i]['masuk'] = '';
            $dt_final[$i]['pulang'] = '';
        }
        
        $object = json_decode(json_encode($dt_final), FALSE);    
        // $this->echopre($object);die;
        echo json_encode(array('response' => $object));        
    }

    public function get_data_poli() {
        $poli = $this->Report3_m->get_data_poli();
        $dt_poli[0]['unit_id'] = 'ALL';
        $dt_poli[0]['unit_kode'] = 'ALL';
        $dt_poli[0]['unit_nama'] = 'ALL';
        $i=1;
        foreach ($poli as $key => $value) {
            $dt_poli[$i]['unit_id'] = $value['unit_id'];
            $dt_poli[$i]['unit_kode'] = $value['unit_kode'];
            $dt_poli[$i]['unit_nama'] = $value['unit_nama'];
            $i++;
        }
        // $this->echopre($dt_poli);die;

        $object = json_decode(json_encode($dt_poli), FALSE);
        echo json_encode($object);
    }

    public function get_data_bayar() {
        $bayar = $this->Report3_m->get_data_bayar();
        $dt_bayar[0]['bayar_id'] = 'ALL';
        $dt_bayar[0]['bayar_kode'] = 'ALL';
        $dt_bayar[0]['bayar_nama'] = 'ALL';
        $i=1;
        foreach ($bayar as $key => $value) {
            $dt_bayar[$i]['bayar_id'] = $value['bayar_id'];
            $dt_bayar[$i]['bayar_kode'] = $value['bayar_kode'];
            $dt_bayar[$i]['bayar_nama'] = $value['bayar_nama'];
            $i++;
        }
        // $this->echopre($dt_bayar);die;

        $object = json_decode(json_encode($dt_bayar), FALSE);
        echo json_encode($object);
    }

    public function get_data_diagnosa() {
        $diagnosa = $this->Report3_m->get_data_diagnosa();  
        $dt_diagnosa[0]['diagnosa_id'] = 'ALL';
        $dt_diagnosa[0]['diagnosa_kode'] = 'ALL';
        $dt_diagnosa[0]['diagnosa_name'] = 'ALL';
        $i=1;
        foreach ($diagnosa as $key => $value) {
            $dt_diagnosa[$i]['diagnosa_id'] = $value['diagnosa_id'];
            $dt_diagnosa[$i]['diagnosa_kode'] = $value['diagnosa_kode'];
            $dt_diagnosa[$i]['diagnosa_name'] = $value['diagnosa_name'];
            $i++;
        }
        // $this->echopre($dt_diagnosa);die;

        $object = json_decode(json_encode($dt_diagnosa), FALSE);                  
        echo json_encode($object);
    }
}