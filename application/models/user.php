<?php if( ! defined('BASEPATH')) exit('No Direct Acess Allowed');

class User extends CI_Model
{
	public function validate()
	{
		$this -> db -> where('username', $this ->  input -> post('username'));
		$this -> db -> where('password', md5($this -> input -> post('password')));
		$query = $this -> db ->get_where('user');

		if($query -> num_rows == 1)
		{
			return true;

			}
}