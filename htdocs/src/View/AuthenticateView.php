<?php

class AuthenticateView
{
	private $route = 'admin/home.php';
	
	public function __contruct(){}
	
	public function getIndexRoute()
	{
		return 'admin/home.php';
	}
	public function getLogonRoute()
	{
		return 'authenticate/logon.php';
	}
        
	
}