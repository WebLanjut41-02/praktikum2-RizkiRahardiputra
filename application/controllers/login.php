<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$where = array(
			'nama' => $nama,
			'nip' => md5($nip)
			);
		$cek = $this->m_login->cek_login("admin")->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $nama,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "Nama dan Nip anda salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

?>