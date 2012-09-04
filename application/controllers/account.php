<?php if( ! defined('BASEPATH')) exit('No direct script allowed');

class Account extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this -> load -> model('user');
	}

	// function _salt_password($username,$password)
	// {		
	// 	//Get the encryption key from the config file	
	// 	$key = $this->config->item('encryption_key');
		
	// 	//Get the first 4 characters of the username and reverse to create a user specific value
	// 	$usv = strrev(substr($username,1,4));
		
	// 	//Return the sha1 hashed values as a password
	// 	return $this->encrypt->sha1($key.$password.$usv);		

	function _login_user($key)
	{
		//Get the entered username from post
		$username = $this->input->post('username');
		
		//Get the entered password from post			
		$password = md5($this->input->post('password'));
		
		//Salt the entered password and return the salted password	$salted = $this->_salt_password($username,$password);
		
		
		//Attempt to login the user using the username and salted password						
		$user = $this->user->login_user($username,$password );
		//Check if the user was found
		if ($user)
		{
			//If the user was found then set the session id variable to the user id
				$data = array(
					'username' => $this -> input ->post('username'),
					'is_logged_in_admin' => true,
					'id'=> $user-> id
					);
				$this -> session -> set_userdata($data);
		}
		else
		{
			//The user was not found so set a message to this effect
			$this->form_validation->set_message('_login_user','The account was not found');
			//Return false, validation failed
			return FALSE;
			
		}		
	}	

	public function login()
	{	
		//Set the validation rules for the username and password, with the username set to use the _login_user callback
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[12]|trim|callback__login_user');
		
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[12]|trim');			
		
		//If the validation has been executed and the method used to access the page is post
		if ($this->input->server('REQUEST_METHOD') === 'POST' && $this->form_validation->run() == TRUE)
		{			
			//At this point the validation including the user_login callback has passed so redirect to the account main action		
	
			redirect('/');
		}
		
		//Render the login view
		$this->load->view('login.php');		
	}



	  public function logout() {

	  	//destroying the session and together with the BASEPATH TO REFRESh (REFRESH WHEN THE BACK BUTTON IS REFRESH)
        $array = array(
                'uid'=>'',
                'usertype'=>'',
                'is_logged_in_admin'=>FALSE
        );
        $this->session->unset_userdata($array);
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }

}