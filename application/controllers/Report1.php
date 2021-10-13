<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Report1_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Report1');
        $this->load->view('templates/footer');

    }

    function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data($unit_kode = 'ALL',$diagnosa_kode = 'ALL') {        
        $data = $this->Report1_m->get_data($unit_kode,$diagnosa_kode);        
        $i = 0;
        foreach ($data as $k => $v) {            
            $dt_final[$i]['poli'] =  $v['unit_nama'];
            $dt_final[$i]['diagnosa'] = $v['diagnosa_kode'].' - '. $v['diagnosa_name'];
            $dt_final[$i]['jumlah'] = $v['Jumlah'];
            $i++;
        }
        $object = json_decode(json_encode($dt_final), FALSE);    
        // $this->echopre($object);die;
        echo json_encode(array('response' => $object));        
    }

    public function get_data_poli() {
        $poli = $this->Report1_m->get_data_poli();
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
    public function get_data_diagnosa() {
        $diagnosa = $this->Report1_m->get_data_diagnosa();  
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