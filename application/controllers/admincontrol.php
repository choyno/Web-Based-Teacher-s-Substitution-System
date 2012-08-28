<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admincontrol extends CI_Controller {


	public function  __construct()
	{
		parent::__construct();
		$this -> is_logged_in();

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


	public function is_logged_in()
	{
		$is_logged_in = $this -> session -> userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != TRUE)
		{
			redirect('login/index');
			die();

		}
	}
}