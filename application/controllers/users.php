<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

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
	public function index()
	{	
		if(isset($this->session->email) && isset($this->session->password)){
			redirect($this->session->designation);
		}
		else{
			$this->load->view('users/login');
		}
	}
	
	public function login_user() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$result = $this->user_model->login_check($email, $password);
			if ($result == false) {
				$this->session->set_flashdata('login_failed', 'Login Failed. Try Again!');
				redirect('users');
			}
			else {
				foreach ($result as $object) {
				$email = $object->email;
				$designation = $object->designation;
				$user_data = array (
					'email' => $email,
					'designation' => $designation,
					'password' => $password,
					'var' => 1
					);
				$this->session->set_userdata($user_data);
				$this->session->set_tempdata('nloggedin', 'You are logged in.', 300);
				redirect($this->session->designation);
				}
			}
		
			
	}
	public function register_now() {
		$res = $this->user_model->check_if_logged_in();
		if ($res==TRUE){
			redirect($this->session->designation);
		}
		else {
			$this->load->view('customer/register');
		}
	}
	public function linktopass(){
		$res = $this->user_model->check_if_logged_in();
		if ($res==TRUE){
			redirect($this->session->designation);
		}
		else{
			$this->load->view('customer/forgotpass');
		}
	}
	public function forgot_pass(){
		$email = $this->input->post('email');
		$res = $this->user_model->check_email($email);
		if ($res == false){
			$this->user_model->send_email($email);
			$this->session->set_flashdata('reset_pass','Reset Email Sent!');
			redirect('users');
		}
		else {
			$this->session->set_flashdata('account_exists','Enter correct email');	
			redirect('users');	
		}
	}

	public function register_user() {
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$result = $this->user_model->insert_info($email,$name,$password);
		if ($result == true) {
			$this->session->set_flashdata('created_successfully', 'Account created! Login Please.');
			redirect('users');
		}
		else {
			$this->session->set_flashdata('account_exists', 'Account already exists!');
			redirect('users');	
		}
	}
	public function logout(){
		$res = $this->user_model->check_if_logged_in();
		if ($res == TRUE) {
			$this->session->sess_destroy();
			$this->session->set_flashdata('logged_in', 'You have been logged out!');
			$this->load->view('users/login');
		}
		else{
			redirect($this->session->designation);
		}
	}

	
}