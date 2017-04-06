<?php
class admin_model extends CI_Model {
	public function index(){
	}

	//function to insert in REQUESTS
	public function approve_notification($email, $name, $sname,$number){
		$users = $this->load->database('users',TRUE);
		$ar = array(
			'name'=>$name,
			'email'=>$email,
			'request'=>$sname,
			'number'=>$number
			);
		$users->insert('requests',$ar);
	}

	//function to set active a plan
	public function approve($number,$plan){
		$service = $this->load->database('services', TRUE);
		$service->where([
			'number'=>$number,
			'plan'=>$plan
			]);
		$var = array(
			'active'=>'1'
			);
		$service->update($sname, $var);

	}
}