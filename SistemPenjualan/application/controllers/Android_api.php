<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Android_api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("user");
	}

	//---------------------------------------------------------------//

	public function index()
	{
		$this->load->view('admin/login');
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
		$cek = $this->user->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			echo json_encode($data_session);
		}else{
			echo "Username dan password salah !";
			echo json_encode("eror");
		}
	}
	
}

