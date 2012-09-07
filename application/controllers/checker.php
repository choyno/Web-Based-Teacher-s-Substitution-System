<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checker extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this-> is_logged_in_checker();
		$this-> load ->model('user');
		$this-> user -> protect_acct_checker();

	}

	public function index()
	{
		$data['mainContent'] = 'dashboard';
		$this-> load -> view('base/checker/template', $data);
	}
	public function verifysubstitution()
	{	
		$data['mainContent'] ='base/checker/verifyteacher';
		$this-> load -> view('base/checker/template', $data);

	}

	public function vouchsubstitution()
	{	
		$data['mainContent'] = 'base/checker/vouchteacher';
		$this-> load -> view('base/checker/template', $data);
	}

	public function generatereports()
	{
		$data['mainContent']='base/checker/generatereport';
		$this-> load -> view ('base/checker/template', $data);
	}


	public function is_logged_in_checker()
	{
		$is_logged_in_checker = $this-> session -> userdata('is_logged_in_checker');

		if(!isset ($is_logged_in_checker) || $is_logged_in_checker != TRUE)
		{
			redirect('account/login');
			die();
		}
	}
}