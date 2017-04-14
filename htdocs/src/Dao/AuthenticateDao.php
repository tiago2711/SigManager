<?php

class AuthenticateDao
{
	public function __construct()
	{
		
	}
	public function authenticate($username, $password)
	{				
		$sql = "SELECT * FROM _users WHERE username = '" . $username . "' AND senha = '" . Md5($password) ."'";

		$query = pg_query($sql);
		
		$obj = pg_fetch_object($query);
		
		if(!$obj)
			return false;
				
		$user = new User();
		$user->setId($obj->id);
		$user->setName($obj->username);
		$user->setEmail($obj->email);

		
		return $user;	
	}
}