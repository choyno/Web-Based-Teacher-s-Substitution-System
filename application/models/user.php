<?php

class User extends CI_Model {

	function __construct()
	{
		parent::__construct();

		//calling forclearing the cache
		$this -> __clear_cache();
		$this->load->helper('date');
	}
	//clearing the cache
	private function __clear_cache()
	{
	    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	    $this->output->set_header("Pragma: no-cache");
	}
	//protect account for back button to cache
	public function protect_acct() 
	{
	    $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');
	        if($is_logged_in_admin != TRUE) {
	            redirect(base_url(), 'refresh');    
	 	} 
	}


	function login_user($username,$password)
	{		
		//Checking the user if its on the database
		$query = $this->db->get_where('users',array('username'=>$username,'password'=>$password,'status'=>'1', 'user_types_id' =>'1') );
		return $query->row();

	}

	
	// function login_head($username,$password)
	// {		
	// 	//Checking the user if its on the database
	// 	$query2 = $this->db->get_where('users',array('username'=>$username,'password'=>$password,'status'=>'1', 'user_types_id' =>'2') );
	// 	return $query2->row();
	// }
	// function login_checker($username,$password)
	// {		
	// 	//Checking the user if its on the database
	// 	$query3 = $this->db->get_where('users',array('username'=>$username,'password'=>$password,'status'=>'1', 'user_types_id' =>'3') );
	// 	return $query3->row();
	// }
}
