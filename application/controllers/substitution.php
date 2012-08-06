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
	public function index() {

		$data['mainContent'] ='dashboard';
		$this -> load ->view('base/template', $data);
	}

	public function request() {

		$data['mainContent'] ='requestsubstitution';
		$this -> load ->view('base/template', $data);
	}

	public function schedule(){

		$data['mainContent'] ='teacherschedules';
		$this -> load ->view('base/template', $data);
	}

	public function vouch(){

		$data['mainContent'] ='vouchteachers';
		$this -> load ->view('base/template', $data);
	}

	public function remind(){

		$data['mainContent'] ='remindsubteachers';
		$this -> load ->view('base/template', $data);
	}

	public function viewabsent(){

		$data['mainContent'] ='viewabsentteacher';
		$this -> load ->view('base/template', $data);
	}

	public function viewsubstitute(){

		$data['mainContent'] ='viewsubstituteteacher';
		$this -> load ->view('base/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */