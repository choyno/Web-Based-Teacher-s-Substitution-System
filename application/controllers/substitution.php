<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Substitution extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	

	//create constructor
	public function  __construct()
	{

		parent::__construct();
		$this -> is_logged_in_head();

		//calling the model user for the clearing of cache
		$this -> load-> model('user');
		//calling the protect_acct fucntion into the user model
		$this->user->protect_acct();
		
	}
	public function index() {

		$data['mainContent'] ='dashboard';
		$this -> load ->view('base/heads/template', $data);
	}

	public function request() {

		$data['mainContent'] ='requestsubstitution';
		$this -> load ->view('base/heads/template', $data);
	}

	public function viewrequest() {

		$data['mainContent'] ='viewrequest';
		$this -> load ->view('base/heads/template', $data);
	}



	public function vouch(){

		$data['mainContent'] ='vouchteachers';
		$this -> load ->view('base/heads/template', $data);
	}

	public function remind(){

		$data['mainContent'] ='remindsubteachers';
		$this -> load ->view('base/heads/template', $data);
	}

	public function viewabsent(){

		$data['mainContent'] ='viewabsentteacher';
		$this -> load ->view('base/heads/template', $data);
	}

	public function viewsubstitute(){

		$data['mainContent'] ='viewsubstituteteacher';
		$this -> load ->view('base/heads/template', $data);
	}



	//checking is the user is login if not direct to login page..
	
	public function is_logged_in_head()
	{
		$is_logged_in_head = $this -> session -> userdata('is_logged_in_head');

		if(!isset($is_logged_in_head) || $is_logged_in_head != TRUE)
		{
			redirect('account/login');
			die();

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */