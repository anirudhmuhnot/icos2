<?php
class admin extends CI_Controller {
	public function index(){
		if(isset($this->session->email) && isset($this->session->password) && ($this->session->designation=='admin')){
			$this->load->view('admin/welcome');
		}
		else{
			$this->load->view('users/login');
		}
	}
	public function approve(){
		$this->admin_model->approve($email,$sname);
		echo "update to actice";
	}
}