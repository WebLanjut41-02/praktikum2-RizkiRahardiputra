<?php 

class m_login extends CI_Model{	
	function cek_login(){		
		return $this->db->get('karyawan');
	}	
}