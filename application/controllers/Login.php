<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m');
		if ($this->session->userdata('is_login')) {
			redirect('Pegawai');
		}
	}

	public function index()
	{
		$this->load->view('view_Login');
	}

	public function do_login()
	{
		$data = $this->input->post(null, true);
		if($data['username'] == 'admin' && $data['password'] == 'admin')
			$is_login = true;
        // $is_login = $this->Login_m->authorize($data['username'], $data['password']);
		if ($is_login) {
            $session_set = array(
                'is_login' => true,
                'user_id' => 'admin',
                'pegawai_id' => 'admin',
                'username' => 'admin',
                'nama' => 'admin',
            );
            $this->session->set_userdata($session_set);
            redirect("Pegawai");            
		} else {
			$this->session->set_flashdata('message', "Username atau password salah");
			redirect("Login");
		}
	}
}
