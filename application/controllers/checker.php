<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checker extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		//$this-> is_logged_in_checker();
		$this-> load ->model('user');
		$this-> user -> protect_acct();

	}

	public function index()
	{
		$data['mainContent'] = 'dashboard';
		$this-> load -> view('base/checker/template', $data);
	}



	// function is_logged_in_checker();
	// {
	// 	$is_logged_in_checker = $this-> session -> userdata('is_logged_in_checker');

	// 	if(!isset (is_logged_in_checker) || $is_logged_in_checker != TRUE)
	// 	{
	// 		redirect('account/login');
	// 		die();
	// 	}
	//}
}