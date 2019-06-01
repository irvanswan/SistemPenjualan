<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controler extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("user");
	}
	//
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function home()
	{
		$this->load->view('admin/index');
	}

	//Fungsi login pada form login
	function loginuser(){
		if(isset($_POST['login'])){
		$nama=$_POST['username'];
		$paceword=md5($_POST['password']);
	$where = array(
			'username' => $nama,
			'password' => $paceword
			);
		$cek = $this->user->getuser($where);
		if($cek > 0){
 		$data_session = array(
				'username' => $nama,
				'status' => "login"
				);
 			$this->session->set_userdata($data_session);
 			$acount=$this->user->getall();
			return $this->load->view('admin/index');
			var_dump($cek,$nama);
			echo "Berhasil login";
		}else{
			//echo "Username dan password salah !";
			echo "gagal login";
		}
	}
}
	
	function form_makanan(){
		$this->load->view('admin/input_makanan');
		$makanan=$this->menu_model->getById('MN0001');
	}
	function form_minuman(){
		$this->load->view('admin/input_minuman');
		$minuman=$this->menu_model->getById('MN0002');
	}
	function logout(){
		session_destroy();
	}
	
	function v_makanan(){
		$makanan=$this->menu_model->getById('MN0001');
		$minuman=$this->menu_model->getById('MN0002');

		$this->load->view('index');
	}
}

