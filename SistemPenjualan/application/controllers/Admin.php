<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("user");
	}

	//---------------------------------------------------------------//

	public function index(){
			if($this->session->userdata('status') == "login"){
				$this->load->view('admin/index');
			}else{
			$this->load->view('admin/login');
		}
	}

	//--------------------------------------------------------------//

	public function grafik(){

		if($this->session->userdata('status') == "login"){
			$this->load->view('admin/views/grafik');
		}else{
		$this->load->view('admin/login');
		}
	}

	//--------------------------------------------------------------//

	public function home(){

		if($this->session->userdata('status') == "login"){
			$this->load->view('admin/views/home');
		}else{
		$this->load->view('admin/login');
		}
	}

	//--------------------------------------------------------------//

	public function anggota(){

		if($this->session->userdata('status') == "login"){
			$this->load->view('admin/views/anggota');
		}else{
		$this->load->view('admin/login');
		}
	}

	//--------------------------------------------------------------//

	//Fungsi login pada form login
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->user->cek_login($where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("ses"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$data_session = array(
			'nama',
			'status'
		);
		$this->session->unset_userdata($data_session);
		redirect(base_url("ses"));
	}

	function form_produk_tani(){
		$this->load->view('admin/input_makanan');
	}
	
}

