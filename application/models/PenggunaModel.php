<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function get_user_account($user){
		$query = $this->db->get_where('sigaka_pengguna',$user);
		return $query->row_array();
	}

}
