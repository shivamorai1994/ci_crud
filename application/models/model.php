<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function insert($data){
			$table_name = "users";
			$this->db->insert($table_name, $data);
		}
	}
?>