<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admincontrol extends CI_Controller {


	public function  __construct()
	{
		parent::__construct();
		$this -> is_logged_in_admin();

		//calling the model user for the clearing of cache
		$this -> load-> model('user');
		//calling the protect_acct fucntion into the user model
		$this->user->protect_acct();
		
	}

	public function index(){

		$data['admincontent'] = 'dashboard';
		$this -> load ->view('base/admin/template', $data);
	}

	public function schedule(){

		$data['admincontent'] ='teacherschedules';
		$this -> load ->view('base/admin/template', $data);
	}

	public function viewabsent(){

		$data['admincontent'] ='viewabsentteacher';
		$this -> load ->view('base/admin/template', $data);
	}

	public function viewsubstitute(){

		$data['admincontent'] ='viewsubstituteteacher';
		$this -> load ->view('base/admin/template', $data);
	}


	public function user()
	{

		$data['admincontent'] = 'adduser';
		$this -> load -> view ('base/admin/template', $data);

	}

	public function useraccount()
	{

		$data['admincontent'] = 'viewusers';
		$this -> load -> view ('base/admin/template', $data);

	}


	public function is_logged_in_admin()
	{
		$is_logged_in_admin = $this -> session -> userdata('is_logged_in_admin');

		if(!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)
		{
			redirect('account/login');
			die();

		}
	}
}