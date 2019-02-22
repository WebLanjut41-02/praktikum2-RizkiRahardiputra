<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class adddata extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['paket'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
    }
    
    function tambah_aksi(){
		$tgldatang = $this->input->post('tgldatang');
		$sasaranpenghuni = $this->input->post('sasaranpenghuni');
		$penerimakaryawan = $this->input->post('penerimakaryawan');
        $isipaket = $this->input->post('isipaket');
        $tglambil = $this->input->post('tglambil');
		$data = array(
			'tgldatang' => $tgldatang,
			'sasaranpenghuni' => $sasaranpenghuni,
            'penerimakaryawan' => $penerimakaryawan,
            'isipaket' => $isipaket,
            'tglambil' => $tglambil
			);
		$this->m_data->input_data($data,'paket');
		redirect('adddata/index');
	}

}

?>