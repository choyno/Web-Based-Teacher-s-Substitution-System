<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		
		$this->load->view('login');
	}

	public function validation()
	{

		$this -> form_validation -> set_rules('username', 'username' , 'required');
		$this -> form_validation -> set_rules('password' , 'password' , 'required');

		
		if($this -> form_validation -> run())
		{
			$this -> load ->model('user');
			$query = $this -> user -> validate();
			if($query)
			{
				$data = array(
					'username' => $this -> input ->post('username'),
					'is_logged_in' => true
					);

				$this -> session -> set_userdata($data);
				redirect('admincontrol/index');

			}
			else
			{	
				
				$this -> session -> set_flashdata('message', 'Login Failed. Please remember that passwords are case sensitive');
				$this-> index();

			}
		}
		else
		{
			$this -> session -> set_flashdata('message', 'Login Failed. Please remember that passwords are case sensitive');
			$data['reset'] = FALSE;
			$this-> index($data);	
		}

	}

	public function logout()
	{
		$this -> session -> sess_destroy();
		redirect('login/index');
		die();
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */