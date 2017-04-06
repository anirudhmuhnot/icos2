<?php
class customer extends CI_Controller {
	
	public function index(){
		if(isset($this->session->email) && isset($this->session->password) && ($this->session->designation=='customer') ) {
			$this->load->view('customer/welcome');
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//links to different pages
	//profile
	// public function linktoprofile(){
	// $res = $this->customer_model->check_if_logged_in();
	// if ($res==TRUE){
	// 	$this->load->view('customer/profile');
	// }
	// else{
	// 		$this->session->set_flashdata('logged_in','Not logged in.');
	// 		redirect('users');
	// 	}
	// }

	//mobile
	public function linktomobile(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$this->load->view('customer/mobile');
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//postpaid
	public function linktopostpaid(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$res = $this->customer_model->check_service_mobilepost();
		if ($res==TRUE){
			$this->session->set_tempdata('connection','Pay-per-use plan active.');
			$this->load->view('customer/postpaid');
		}
		else{
			$this->session->set_tempdata('check_service_postpaid', 'Postpaid connection not found or not approved by admin yet. Contact help.', 60);
			$this->session->set_tempdata('check', 'Postpaid connection not found or not approved by admin yet. Contact help.', 5);
			redirect('users');
		}
		
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//prepaid
	public function linktoprepaid(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
			$res = $this->customer_model->check_service_mobilepre();
			if ($res==TRUE){
				$this->load->view('customer/prepaid');
			}
			else{
				$this->session->set_tempdata('check_service_prepaid', 'Prepaid connection not found or not approved by admin yet. Contact help.', 60);
				$this->session->set_tempdata('check', 'Prepaid connection not found or not approved by admin yet. Contact help.', 5);
				redirect('users');
			}
		}
		else{
				$this->session->set_flashdata('logged_in','Not logged in.');
				redirect('users');
		}
	}
	
	//link to bnilling
	public function linktobilling(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
		$this->load->view('customer/billing');
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//dth
	public function linktodth(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
			$res = $this->customer_model->check_service_dth();
			if ($res==TRUE){
				$this->load->view('customer/dth');
			}
			else{
				$this->session->set_tempdata('check_service_dth', 'DTH connection not found or not approved by admin yet. Contact help.', 60);
				$this->session->set_tempdata('check', 'DTH connection not found or not approved by admin yet. Contact help.', 5);
				redirect('users');
			}
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//help
	public function linktohelp(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
			$this->load->view('customer/help');
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//dataservices
	public function linktodataservices(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
			$res = $this->customer_model->check_service_data();
			if ($res==TRUE){
				$this->load->view('customer/data_services');
			}
			else{
				$this->session->set_tempdata('check_service_data', 'Data services not active or not approved by admin yet. Contact help.', 60);
				$this->session->set_tempdata('check', 'Data services not active or not approved by admin yet. Contact help.', 5);
				redirect('users');
			}
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//new connection
	public function linktonewcon(){
		$res = $this->customer_model->check_if_logged_in();
		if ($res==TRUE){
			$this->load->view('customer/newcon');
		}
		else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}


	//create new connection for customer and send request to admin for approval
	//combined for all
	public function new_connection(){
	$this->session->var +=1;
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$service = $this->input->post('service');
		if($service=='mobilepre'){
			$sname = 'mobilepre';
			$number = $this->customer_model->new_mobilepre();
			$this->session->set_flashdata('connection','Successfully created new connection.Wait for admins approval!');
			$this->admin_model->approve_notification($this->session->email,$this->customer_model->get_name(),$sname,$number);
			$this->session->set_tempdata('connection'.$this->session->var, 'Successfully created new mobile Prepaid connection.'.ctype_upper($sname), 300);
			redirect('customer');
		}
		else if($service=='dth'){
			$sname ='dth';
			$number=$this->customer_model->new_dth();
			$this->session->set_flashdata('connection','Successfully created new connection.Wait for admins approval!');
			$this->admin_model->approve_notification($this->session->email,$this->customer_model->get_name(),$sname,$number);
			$this->session->set_tempdata('connection'.$this->session->var, 'Successfully created new DTH connection.', 300);
			redirect('customer');
		}
		else if($service=='mobilepost'){
			$sname = 'mobilepost';
			$number=$this->customer_model->new_mobilepost();
			$this->session->set_flashdata('connection','Successfully created new connection.Wait for admins approval!');
			$this->admin_model->approve_notification($this->session->email,$this->customer_model->get_name(),$sname,$number);
			$this->session->set_tempdata('connection'.$this->session->var, 'Successfully created new mobile Postpaid connection.', 300);
			redirect('customer');
			}
		else{
			$this->load->view('customer/welcome');	
			$this->session->set_tempdata('connection', 'New connection unsuccessful! Try Again.', 300);
		}
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//adding plan and active services to bill
	//add prepaid plan
	public function add_plan_prepaid(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$name = $this->input->post('group1');
		$number = $this->input->post('number');
		if ($name == ''){
			$this->session->set_flashdata('select_plan', 'Plan not selected!');
			redirect('customer/linktoprepaid');		
		}
		else if($number ==''){
			$this->session->set_flashdata('select_number', 'Number not selected!');
			redirect('customer/linktoprepaid');	
		}
		else {
		$result = $this->customer_model->return_active_mobilepre(trim($number));
		if($result==false){
			$this->session->set_tempdata('connection', 'Services are not approved. Try Again.', 300);
		}
		else if($result==true){	
			$this->customer_model->bill_pre($name, $number);
			$this->session->set_tempdata('connection', 'Plan added. Add more services or Pay bill.', 300);
			redirect('customer');
		 }	
		}	
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//adding plan for postpaid
	public function add_plan_postpaid(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$name = $this->input->post('group1');
		$number = $this->input->post('number');
		if ($name == ''){
			$this->session->set_flashdata('select_plan', 'Plan not selected!');
			redirect('customer/linktopostpaid');		
		}
		else if($number ==''){
			$this->session->set_flashdata('select_number', 'Number not selected!');
			redirect('customer/linktopostpaid');	
		}
		else {
		$result = $this->customer_model->return_active_mobilepost($number);
		if($result==false){
			$this->session->set_tempdata('connection', 'Services are not approved. Try Again.', 300);
		}
		else if($result==true){	
			$this->customer_model->bill_post($name,$number);
			$this->session->set_tempdata('connection', 'Plan added. Add more services or Pay bill.', 300);
			redirect('customer');
		}	}	
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//adding plan dth
	public function add_plan_dth(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$name = $this->input->post('group1');
		$number = $this->input->post('number');
		if ($name == ''){
			$this->session->set_flashdata('select_plan', 'Plan not selected!');
			redirect('customer/linktodth');		
		}
		else if($number ==''){
			$this->session->set_flashdata('select_number', 'Number not selected!');
			redirect('customer/linktodth');	
		}
		else {
		$result = $this->customer_model->return_active_dth($number);
		if($result==false){
			$this->session->set_tempdata('connection', 'Services are not approved. Try Again.', 300);
		}
		else if($result==true){	
			$this->customer_model->bill_dth($name,$number);
			$this->session->set_tempdata('connection', 'Plan added. Add more services or Pay bill.', 300);
			redirect('customer');
		}}
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}

	//adding plan data
	public function add_plan_data(){
	$res = $this->customer_model->check_if_logged_in();
	if ($res==TRUE){
		$name = $this->input->post('group1');
		$number = $this->input->post('number');
		if ($name == ''){
			$this->session->set_flashdata('select_plan', 'Plan not selected!');
			redirect('customer/linktodataservices');		
		}
		else if($number ==''){
			$this->session->set_flashdata('select_number', 'Number not selected!');
			redirect('customer/linktodataservices');	
		}
		else {
		$result = $this->customer_model->return_active_data($number);
		if($result==false){
			$this->session->set_tempdata('connection', 'Services are not approved. Try Again.', 300);
		}
		else if($result==true){	
			$this->customer_model->bill_data($name,$number);
			$this->session->set_tempdata('connection', 'Plan added. Add more services or Pay bill.', 300);
			redirect('customer');
		}}
	}
	else{
			$this->session->set_flashdata('logged_in','Not logged in.');
			redirect('users');
		}
	}



//Paying the bill
public function pay_bill(){
	$email = $this->session->email;
	$dbuser = $this->load->database('users', TRUE);
	$data = array(
        'date_paid' => date("Y-m-d"),
	);
	$dbuser->where([
		'email' => $email
		]);
	$dbuser->update('invoice', $data);
	$this->session->set_tempdata('paid', 'Bill Paid Successfully!', 300);
	redirect('customer');
}
}//end of class
?>