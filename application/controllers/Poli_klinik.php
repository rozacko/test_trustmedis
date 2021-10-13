<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_klinik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Poli_klinik_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Poli_klinik');
        $this->load->view('templates/footer');

    }

    public function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data() {

        $pegawai = $this->Poli_klinik_m->get_data();
        echo json_encode(array('response' => $pegawai));
        
    }

    public function save_add(){
        $max_id = $this->Poli_klinik_m->get_max_id();                
        $data = array(
            'unit_id' => ($max_id+1),
            'unit_kode' => $this->input->post('unit_kode'),
            'unit_nama' => $this->input->post('unit_nama'),
        );
        
        $result = $this->Poli_klinik_m->save_add($data);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function get_data_by_id($id) {

        $pegawai = $this->Poli_klinik_m->get_data_by_id($id);

        echo json_encode($pegawai);
        
    }

    public function save_edit(){
        $id = $this->input->post('unit_id');        
        $data = array(
            'unit_kode' => $this->input->post('unit_kode'),
            'unit_nama' => $this->input->post('unit_nama'),
        );
        $result = $this->Poli_klinik_m->save_edit($data,$id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function save_delete(){
        $id = $this->input->post('id');        
        $result = $this->Poli_klinik_m->deleted_data($id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }
}