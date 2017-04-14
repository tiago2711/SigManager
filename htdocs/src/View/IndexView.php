<?php

class IndexView
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

	public function getAccountRoute()
	{
		return 'account/account.php';
	}
	
	public function getPagRoute()
	{
		return '../PagSeguro/checkout.php';
	}
}