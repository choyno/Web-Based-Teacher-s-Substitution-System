<?php if(! defined('BASEPATH')) exit('No direct scri[t access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}


	public function index()
	{
		if( $this -> session -> userdata('is_logged_in_admin'))
		{
			redirect('admincontrol');
		}
		else if( $this -> session -> userdata('is_logged_in_head'))
		{
			redirect('substitution');
		}
		else
		{
			$this -> session -> sess_destroy();
			$this -> load ->view('login');

		}

	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */