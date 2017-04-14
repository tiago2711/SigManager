<?php

class UserView
{
	public function __contruct(){}
	
	public function getIndexRoute()
	{
		return 'users/index.php';
	}
	public function getAddRoute()
	{
		return 'users/create.php';
	}
	
	public function getPassRoute()
	{
		return 'users/pass.php';
	}	
	
	public function getListRoute()
	{
		return 'users/list.php';
	}
	public function getEditRoute()
	{
		return 'users/edit.php';
	}
	public function getAuthenticateRoute()
	{
		return 'index/index.php';
	}
	
	public function getPasswordRoute()
	{
		return 'users/password.php';
	}

}