<?php

class UserDao
{
	public function __construct()
	{
		
	}
	public function insert($user)
	{
		$sql = "INSERT INTO _users ( username, email, senha) VALUES ('".$user->getName()."', '".$user->getEmail()."', '".$user->getPassword()."')";
		
		if(pg_query($sql)){
			return true;
		}
		return false;	
	}
	public function update($user)
	{
		$sql = "UPDATE _user SET username = '".$user->getName()."', email=  '".$user->getEmail()."' WHERE id = '".$user->getId()."'";
		
		
		if(pg_query($sql))
			return true;
		
		return false;	
	}
	
	public function passUpdate($user)
	{
		$sql = "UPDATE _user SET senha = '".$user->getPassword()."' WHERE id = '".$user->getId()."'";
		
	
		if(pg_query($sql))
			return true;
		
		return false;	
	}	
	
	public function getAll()
	{
		$sql = "SELECT * FROM _users";
		
		$query = pg_query($sql);
		
		$users = array();
		
		while($obj = pg_fetch_object($query))
		{
			$user = new User();
			$user->setId($obj->id);
			$user->setName($obj->username);
			$user->setEmail($obj->email);

			$users[] = $user; 
		}
		
		return $users;	
	}
	public function getUser($id)
	{
		$sql = "SELECT * FROM _users WHERE id = " . $id;
			
		$query = pg_query($sql);
		
		$obj = pg_fetch_object($query);
		
		$user = new User();
		
		$user->setId($obj->id);
		$user->setName($obj->username);
		$user->setEmail($obj->email);
		$user->setPassword($obj->senha);
	

		return $user;	
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
		$user->setName($obj->name);
		$user->setEmail($obj->email);

		echo($user->getName());

		
		return $user;	
	}
	
	public function authenticateEmail($email)
	{		
		$sql = "SELECT * FROM _users WHERE email = '" . $email . "'";
		
		$query = pg_query($sql);
		
		$obj = pg_fetch_object($query);
		
		if(!$obj)
			return false;
		
		return true;	
	}	

}