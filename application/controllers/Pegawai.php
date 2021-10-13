<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pegawai_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Pegawai');
        $this->load->view('templates/footer');

    }

    public function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data() {

        $pegawai = $this->Pegawai_m->get_data();
        echo json_encode(array('response' => $pegawai));
        
    }

    public function save_add(){
        $max_id = $this->Pegawai_m->get_max_id();                
        $data = array(
            'pegawai_id' => ($max_id+1),
            'pegawai_nomor' => $this->input->post('pegawai_nomor'),
            'pegawai_nama' => $this->input->post('pegawai_nama'),
            'pegawai_jenis_kelamin' => $this->input->post('pegawai_jenis_kelamin'),
            'pegawai_sip' => $this->input->post('pegawai_sip'),
        );
        
        $result = $this->Pegawai_m->save_add($data);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function get_data_by_id($id) {

        $pegawai = $this->Pegawai_m->get_data_by_id($id);

        echo json_encode($pegawai);
        
    }

    public function save_edit(){
        $id = $this->input->post('pegawai_id');        
        $data = array(
            'pegawai_nomor' => $this->input->post('pegawai_nomor'),
            'pegawai_nama' => $this->input->post('pegawai_nama'),
            'pegawai_jenis_kelamin' => $this->input->post('pegawai_jenis_kelamin'),
            'pegawai_sip' => $this->input->post('pegawai_sip'),
        );
        $result = $this->Pegawai_m->save_edit($data,$id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function save_delete(){
        $id = $this->input->post('id');        
        $result = $this->Pegawai_m->deleted_data($id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }
}