<?php
class customer_model extends CI_Model {

	//check if user is logged in
	public function check_if_logged_in(){
		if(isset($this->session->email) && isset($this->session->password) && $this->session->designation =='customer'){
			return TRUE;
		}
		else{
			return false;
		}
	}


	// funtion to return all user input values
	//used in getting individual profile values
	public function get_info() {
		$dbuser = $this->load->database('users', TRUE);
		$dbuser->where([
			'email' => $this->session->email,
			'password' => $this->session->password
		]);

		$query = $dbuser->get('customer');
		if ($query->num_rows() == 1){
			return $query->result();
		}
		else {
			return false;
		}
	}

	//function to get name of user for profile and	
	public function get_name(){
		$res = $this->customer_model->get_info();
		foreach($res as $obj){
			return $obj->name;
		}
	}
	//function to get address of user for profile and	
	public function get_address(){
		$res = $this->customer_model->get_info();
		foreach($res as $obj){
			return $obj->address;
		}
	}


	//functions for new connection
	//new connection for prepaid
	public function new_mobilepre(){
 		$this->session->var +=1;
 		$service = $this->load->database('services', TRUE);
 		$number = $this->customer_model->unique();
 		$var1 = array(
 			'email'=>$this->session->email,
 			'number'=> $number
 			);
 		$var2 = array(
 			'email'=>$this->session->email,
 			'number'=> $number,
 			'active_post' => 0 
 			);
 		$service->insert('mobilepre',$var1);
 		$service->insert('data_services',$var2);
 		return $number;
 	}

 	//new connection for postpaid
 	public function new_mobilepost(){
 		$this->session->var +=1;
		$service = $this->load->database('services', TRUE);
		$number = $this->customer_model->unique();
		$var1 = array(
 			'email'=>$this->session->email,
 			'number'=>$number 
 			);
		$var2 = array(
 			'email'=>$this->session->email,
 			'number'=>$number,
 			'active_post' => 1 
 			);
 		$service->insert('mobilepost',$var1);
 		$service->insert('data_services',$var2);
 		return $number;
 	}

 	//newconnection for dth
 	public function new_dth(){
 		$this->session->var +=1;
 		$service = $this->load->database('services', TRUE);
 		$id = $this->customer_model->unique();
 		$var = array(
 			'email'=>$this->session->email,
 			'subscriber_id'=> $id
 			);
 		$service->insert('dth',$var);
 		return $id; 
 	}

	//helper for unique id generation for newconnection
	public function unique(){
		$random = time() .rand(10*45,5);
		return $random;
	}

	//function to not allow select plan if number or plan not selected
	//functions to get if connection approved by admin
	//used to return if connection is approved by admin
	public function return_active_mobilepre($number){
		$service = $this->load->database('services', TRUE);
		$service->where([
			'number' => $number
			]);
		$query = $service->get('mobilepre');
		foreach ($query->result() as $obj) {
			if($obj->active == 0){//change this after admin
				return true;
			}
			else{
				return false;
			}
		}
	}

	//used to return if connection is approved by admin
	public function return_active_mobilepost($number){
		$service = $this->load->database('services', TRUE);
		$service->where([
			'number' => $number
			]);
		$query = $service->get('mobilepost');
		foreach ($query->result() as $obj) {
			if($obj->active == 0){//change this after creating admin
				return true;
			}
			else{
				return false;
			}
		}
	}

 	//used to return if connection is approved by admin
 	public function return_active_data($number){
		$service = $this->load->database('services', TRUE);
		$service->where([
			'number' => $number
			]);
		$query = $service->get('data_services');
		foreach ($query->result() as $obj) {
			if($obj->active==0){//change to 1 after creating admin
				return true;
			}
			else{
				return false;
			}
		}
	}

	//used to return if connection is approved by admin
 	public function return_active_dth($number){
		$service = $this->load->database('services', TRUE);
		$service->where([
			'subscriber_id' => $number
			]);
		$query = $service->get('dth');
		foreach ($query->result() as $obj) {
			if($obj->active==0){//change to 1 after creating admin
				return true;
			}
			else{
				return false;
			}
		}
	}

	//helper check mulptiple connections for single user
	public function check_multiple($sname){
 		$service = $this->load->database('services', TRUE);
 		$service->where([
 			'email' => $this->session->email
 		]);
 		$res = $service->get($sname);
 		return $res->result();
 	}

 	
 	//if no connection exists
 	//prepaid
 	public function check_service_mobilepre(){
 		$service = $this->load->database('services', TRUE);
 		$service->where([
 			'email'=>$this->session->email
 			]);
 		$query = $service->get('mobilepre');
 		if($query->num_rows()>0){
 			return TRUE;
 		}
 		else {
 			return FALSE;
 		}
 	}

 	//postpaid
 	public function check_service_mobilepost(){
 		$service = $this->load->database('services', TRUE);
 		$service->where([
 			'email'=>$this->session->email
 			]);
 		$query = $service->get('mobilepost');
 		if($query->num_rows()>0){
 			return TRUE;
 		}
 		else {
 			return FALSE;
 		}
 	}

 	//dth
 	public function check_service_dth(){
 		$service = $this->load->database('services', TRUE);
 		$service->where([
 			'email'=>$this->session->email
 			]);
 		$query = $service->get('dth');
 		if($query->num_rows()>0){
 			return TRUE;
 		}
 		else {
 			return FALSE;
 		}
 	}

 	//data_services
 	public function check_service_data(){
 		$service = $this->load->database('services', TRUE);
 		$service->where([
 			'email'=>$this->session->email
 			]);
 		$query = $service->get('data_services');
 		if($query->num_rows()>0){
 			return TRUE;
 		}
 		else {
 			return FALSE;
 		}
 	}


 	//if service is active generate invoice and add to the services
 	//invoice and add to active plans for prepaid
 	public function bill_pre($name, $number){
 		$sname='mobilepre';
 		if ($this->customer_model->return_active_mobilepre($number)==TRUE){
 			//active
 			$date = date('Y-m-d', strtotime("+30 days"));
 			$res = $this->customer_model->return_plan_tariff(trim($name),trim($sname))	;
            foreach ($res as $obj) {
            	$tariff = $obj->tariff;
 			}
	 		$data = array(
	 			'email'=>$this->session->email,
	 			'amount'=>$tariff,
	 			'last_date'=>$date,
	 			'plan' => $name,
	 			'service' =>'PREPAID',
				'number' => $number
	 			);
	 		$data1 = array(
	 			'number'=>$number,
	 			'plan' => $name,
	 			'email'=>$this->session->email,
	 			'service'=>'mobilere'
	 			);
	 		$dbuser = $this->load->database('users', TRUE);
	 		$dbuser->insert('active_plans',$data1);
	 		$dbuser2 = $this->load->database('users', TRUE);
	 		$dbuser->insert('invoice',$data);
	 		return TRUE;
	 	}
	 	else {
	 		return FALSE;
	 	}
 	}

 	//invoice and add to active plans for postpaid
 	public function bill_post($name, $number){
 		$sname = 'mobilepost';
 		if($this->customer_model->return_active_mobilepost($number)==TRUE){
 			//active
			$date = date('Y-m-d', strtotime("+30 days"));
			$res = $this->customer_model->return_plan_tariff(trim($name),trim($sname));
            foreach ($res as $obj) {
            	$tariff = $obj->tariff;
 			}
			$data = array(
				'email'=>$this->session->email,
				'last_date'=>$date,
				'plan' => $name,
				'amount' => $tariff,
				'service'=>'POSTPAID',
				'number' => $number
				);
			$data1 = array(
				'number'=>$number,
				'plan' => $name,
				'email'=>$this->session->email,
				'service'=>'mobilepost'
				);
			$dbuser = $this->load->database('users', TRUE);
			$dbuser->insert('active_plans',$data1);
			$dbuser2 = $this->load->database('users', TRUE);
			$dbuser->insert('invoice',$data);
			return TRUE;
		}
		else{
			return FASLE;
		}
 	}

 	//invoice and add to active plans for dth
 	 public function bill_dth($name, $number){
 		if($this->customer_model->return_active_dth($number)==TRUE){
 			//active
 			$sname = 'dth';
			$date = date('Y-m-d', strtotime("+30 days"));
			$res = $this->customer_model->return_plan_tariff(trim($name),trim($sname));
            foreach ($res as $obj) {
            	$tariff = $obj->tariff;
 			}
			$data = array(
				'email'=>$this->session->email,
				'last_date'=>$date,
				'plan' => $name,
				'amount' => $tariff,
				'service'=>'DTH',
				'number' => $number
				);
			$data1 = array(
				'number'=>$number,
				'plan' => $name,
				'email'=>$this->session->email,
				'service'=>'dth'
				);
			$dbuser = $this->load->database('users', TRUE);
			$dbuser->insert('active_plans',$data1);
			$dbuser2 = $this->load->database('users', TRUE);
			$dbuser->insert('invoice',$data);
			return TRUE;
		}
		else{
			return FASLE;
		}
 	}

 	//invoice and add to active plans for data services
 	public function bill_data($name, $number){
 		$sname='data_services';
 		if($this->customer_model->return_active_data($number)==TRUE){
 			//active
			$date = date('Y-m-d', strtotime("+30 days"));
			$res = $this->customer_model->return_plan_tariff(trim($name),trim($sname));
            foreach ($res as $obj) {
            	$tariff = $obj->tariff;
 			}
			$data = array(
				'email'=>$this->session->email,
				'last_date'=>$date,
				'plan' => $name,
				'amount' => $tariff,
				'service'=>'Internet',
				'number' => $number
				);
			$data1 = array(
				'number'=>$number,
				'plan' => $name,
				'email'=>$this->session->email,
				'service'=>'data_services'
				);
			$dbuser = $this->load->database('users', TRUE);
			$dbuser->insert('active_plans',$data1);
			$dbuser2 = $this->load->database('users', TRUE);
			$dbuser->insert('invoice',$data);
			return TRUE;
		}
		else{
			return FASLE;
		}
 	}
 	
 	//return plan tariff for plan name
 	public function return_plan_tariff($name,$sname){
 	$service = $this->load->database('services', TRUE);
 	$service->where([
 		'service'=>$sname,
 		'plan'=>$name
 		]);
 	$query = $service->get('plans');
 		return $query->result();
 	}


 	//for diplaying plans and tariff on views table
 	//return all prepaid plans
 	public function return_all_plans_prepaid(){
 	$service = $this->load->database('services', TRUE);
 	$service->where([
 		'service'=>'mobilepre',
 		]);
 	$query = $service->get('plans');
 		return $query->result();
 	}
 
 	//return all postpaid plans
 	public function return_all_plans_postpaid(){
 	$service = $this->load->database('services', TRUE);
 	$service->where([
 		'service'=>'mobilepost'
 		]);
 	$query = $service->get('plans');
 		return $query->result();
 	}

 	//return all dth plans
 	public function return_all_plans_dth(){
 	$service = $this->load->database('services', TRUE);
 	$service->where([
 		'service'=>'dth'
 		]);
 	$query = $service->get('plans');
 		return $query->result();
 	}

	//return all data plans
 	public function return_all_plans_data(){
 	$service = $this->load->database('services', TRUE);
 	$service->where([
 		'service'=>'data_services'
 		]);
 	$query = $service->get('plans');
 		return $query->result();
 	}


	//current user active plans
	public function get_current_plans_mobilepre($number){
		$dbuser = $this->load->database('users', TRUE);
		$dbuser->where([
			'email'=>$this->session->email,
			'number'=>$number,
			'service'=>'mobilepre'
			]);
		$query = $dbuser->get('active_services');
		return $query->results();
	}
}
?>