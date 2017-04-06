<?php
class user_model extends CI_Model {
	public function login_check($email, $password) {
		$dbuser = $this->load->database('users', TRUE);
		$dbuser->where([
			'email' => $email,
			'password' => $password
		]);

		$query = $dbuser->get('login');
		if ($query->num_rows() == 1){
			return $query->result();
		}
		else {
			return false;
		}
	}
	public function return_invoice(){
		$dbuser = $this->load->database('users', TRUE);
		$dbuser->where([
			'email' => $this->session->email,
			'date_paid =' => 0000-00-00 
		]);
		$query = $dbuser->get('invoice');
		return $query->result();
	}


	public function check_if_logged_in(){
		if(isset($this->session->email) && isset($this->session->password)){
			return TRUE;
		}
		else{
			return false;
		}
	}
	public function check_email($email){
		$dbuser = $this->load->database('users', TRUE);
		$dbuser->where([
			'email'=>$email
			]);
		$query=$dbuser->get('login');
		if ($query->num_rows() > 0){
			return false;
		}
		else{
			return true;
		}
	}
	public function insert_info($email, $name, $password){
		$dbuser = $this->load->database('users', TRUE);
		$customerdata = array(
			'email'=>$email,
			'name'=>$name,
			'password'=>$password
			);
		if($this->user_model->check_email($email) == false) {
			return false;
		}
		else{
			$logindata = array(
				'email'=>$email,
				'designation'=>'customer',
				'password' =>$password
			);
			$dbuser->insert('customer', $customerdata); 
			$dbuser->insert('login', $logindata);
			return true;
		}
	}
	public function send_email($email)
	{
	$config = Array(
	  'protocol' => 'smtp',
	  'smtp_host' => 'ssl://smtp.googlemail.com',
	  'smtp_port' => 465,
	  'smtp_user' => 'iwbg97@gmail.com', 
	  'smtp_pass' => 'iwbg123T', 
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
    );

    $message = 'Hello';
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('iwbg97@gmail.com');
    $this->email->to('anirudh.muhnot@technonjr.org');
    $this->email->subject('Resume from JobsBuddy for your Job posting');
    $this->email->message($message);
  
	}
} 


?>