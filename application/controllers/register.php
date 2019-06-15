<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('model');
			$this->load->helper(array('url','form','html','text','string','file'));
		}
		public function index() {
			$this->load->view('register_view');
		}
		public function signup() {
			// $name = $this->input->post('name');
			// $email = $this->input->post('email');
			// $password = $this->input->post('password');
			// $phone = $this->input->post('phone');
			// $this->model->insert($name,$email,$password,$phone);
			
			$insert = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'phone' => $this->input->post('phone')
			];
			$this->model->insert($insert);
			$this->load->view('login_view');
		}
	}
?>