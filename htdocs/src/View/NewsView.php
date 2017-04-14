<?php

class NewsView
{
	public function __contruct(){}
		
	public function getCreateRoute()
	{
		return 'news/create.php';
	}
	
	public function getListRoute()
	{
		return 'news/list.php';
	}
	public function getEditRoute()
	{
		return 'news/edit.php';
	}
}