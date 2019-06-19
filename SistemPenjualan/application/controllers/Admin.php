<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("user");
		$this->load->model("mProduk");
		$this->load->model("mGrafik");
		$this->load->model("mBiaya");
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

	function grafik(){
		if($this->session->userdata('status') == "login"){

					$databiaya['biaya']=$this->mBiaya->ambildata()->result();
					$this->load->view('admin/views/grafik',$databiaya);
					
			}else{
			$this->load->view('admin/login');
		}
	
	}

	//--------------------------------------------------------------//

	public function dashboard(){

		if($this->session->userdata('status') == "login"){
			$this->load->view('admin/views/home');
		}else{
		$this->load->view('admin/login');
		}
	}

	//--------------------------------------------------------------//

	public function anggota(){

		if($this->session->userdata('status') == "login"){
			$this->load->view('admin/tabelanggota');
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
		if($this->session->userdata('status') == "login"){
				$this->load->view('admin/input_produk_tani');
			}else{
			$this->load->view('admin/login');
		}
		
	}
	function form_produk_olah(){
		if($this->session->userdata('status') == "login"){
				$this->load->view('admin/input_produk_olah');
			}else{
			$this->load->view('admin/login');
		}
		
	}

	function form_anggota(){
		if($this->session->userdata('status') == "login"){
					$this->load->view('admin/input_anggota');
			}else{
			$this->load->view('admin/login');
		}
	
	}

	function form_kegiatan(){
		if($this->session->userdata('status') == "login"){
					$this->load->view('admin/input_kegiatan');
			}else{
			$this->load->view('admin/login');
		}
	
	}

	function tabel_produktani(){
		if($this->session->userdata('status') == "login"){
			$data=array(
				'id_kategori'=>1
			);
					$dataproduk['produk']=$this->mProduk->tampilprodukId($data)->result();
					$this->load->view('admin/tabelproduktani',$dataproduk);
					
			}else{
			$this->load->view('admin/login');
		}
	
	}

	function tabel_olahan(){
		if($this->session->userdata('status') == "login"){
			$data=array(
				'id_kategori'=>2
			);
					$dataproduk['produk']=$this->mProduk->tampilprodukId($data)->result();
					$this->load->view('admin/tabelprodukolahan',$dataproduk);
					
			}else{
			$this->load->view('admin/login');
		}
	
	}





	function form_input_tani(){
		$id_produk=$this->input->post('id_produk');
		$nm_produk=$this->input->post('nama_produk');

		$data=array(
			'id_produk'=>$id_produk,
			'id_kategori'=>1,
			'nm_produk'=>$nm_produk
		);
		$this->mProduk->insert($data);
		echo '<script>alert("Data berhasil di inputkan");</script>';
		$this->form_produk_tani();
	}

	function form_input_olah(){
		$id_produk=$this->input->post('id_produk');
		$nm_produk=$this->input->post('nama_produk');

		$data=array(
			'id_produk'=>$id_produk,
			'id_kategori'=>2,
			'nm_produk'=>$nm_produk
		);
		$this->mProduk->insert($data);
		echo '<script>alert("Data berhasil di inputkan")</script>';
		$this->form_produk_olah();
	}

	
}

