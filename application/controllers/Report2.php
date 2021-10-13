<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Report2_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Report2');
        $this->load->view('templates/footer');

    }

    function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data($pasien_kota = 'ALL',$diagnosa_kode = 'ALL') {        
        $data = $this->Report2_m->get_data($pasien_kota,$diagnosa_kode);        
        $i = 0;
        foreach ($data as $k => $v) {            
            $dt_final[$i]['kota'] =  $v['pasien_kota'];
            $dt_final[$i]['diagnosa'] = $v['diagnosa_kode'].' - '. $v['diagnosa_name'];
            $dt_final[$i]['jumlah'] = $v['Jumlah'];
            $i++;
        }
        $object = json_decode(json_encode($dt_final), FALSE);    
        // $this->echopre($object);die;
        echo json_encode(array('response' => $object));        
    }

    public function get_data_kota() {
        $kota = $this->Report2_m->get_data_kota();
        $dt_kota[0]['kota_id'] = 'ALL';
        $dt_kota[0]['kota_kode'] = 'ALL';
        $dt_kota[0]['kota_nama'] = 'ALL';
        $i=1;
        // foreach ($kota as $key => $value) {
        //     $dt_kota[$i]['kota_id'] = $i;
        //     $dt_kota[$i]['kota_kode'] = $value['pasien_kota'];
        //     $dt_kota[$i]['kota_nama'] = $value['pasien_kota'];
        //     $i++;
        // }
        // $this->echopre($dt_kota);die;

        $object = json_decode(json_encode($dt_kota), FALSE);
        echo json_encode($object);
    }
    public function get_data_diagnosa() {
        $diagnosa = $this->Report2_m->get_data_diagnosa();  
        $dt_diagnosa[0]['diagnosa_id'] = 'ALL';
        $dt_diagnosa[0]['diagnosa_kode'] = 'ALL';
        $dt_diagnosa[0]['diagnosa_name'] = 'ALL';
        $i=1;
        // foreach ($diagnosa as $key => $value) {
        //     $dt_diagnosa[$i]['diagnosa_id'] = $value['diagnosa_id'];
        //     $dt_diagnosa[$i]['diagnosa_kode'] = $value['diagnosa_kode'];
        //     $dt_diagnosa[$i]['diagnosa_name'] = $value['diagnosa_name'];
        //     $i++;
        // }
        // $this->echopre($dt_diagnosa);die;

        $object = json_decode(json_encode($dt_diagnosa), FALSE);                  
        echo json_encode($object);
    }
}