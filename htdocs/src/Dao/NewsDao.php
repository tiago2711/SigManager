<?php

class NewsDao
{
	public function __construct()
	{
		
	}
	public function insert($news)
	{
		$sql = "INSERT INTO _news (title,text_news,autor,img,destaque) VALUES ('".$news->getTitulo()."', '".$news->getTexto()."', '".$news->getAutor()."', '".$news->getImg()."', '".$news->getDestaque()."')";
		
		if(pg_query($sql)){
			return true;
		}
		return false;	
	}
	public function update($news)
	{
		$sql = "UPDATE _news SET title ='".$news->getTitulo()."', text_news ='".$news->getTexto()."', autor='".$news->getAutor()."', img='".$news->getImg()."', destaque= '".$news->getDestaque()."'WHERE id = ".$news->getId()."";

		if(pg_query($sql))
			return true;
		
		return false;	
	}
	
	public function delete($id){
		
		$sql = "DELETE FROM _news where id=".$id;
		
		if(pg_query($sql)){
			return true;
		}
		return false;
	}	
	
	
	public function getAll()
	{
		$sql = "SELECT * FROM _news order by id";
		
		$query = pg_query($sql);
		
		$news = array();
		
		while($obj = pg_fetch_object($query))
		{
			$new = new News();
			$new->setId($obj->id);
			$new->setTitulo($obj->title);
			$new->setTexto($obj->text_news);
			$new->setAutor($obj->autor);
			$new->setImg($obj->img);
			$new->setDestaque($obj->destaque);
			
			
			$news[] = $new; 
		}
		
		return $news;	
	}
	public function getNews($id)
	{
		$sql = "SELECT * FROM _news WHERE id = " . $id;
			
		$query = pg_query($sql);
		
		if($obj = pg_fetch_object($query)){
			$new = new News();
	
			$new->setId($obj->id);
			$new->setTitulo($obj->title);
			$new->setTexto($obj->text_news);
			$new->setAutor($obj->autor);
			$new->setImg($obj->img);
			$new->setDestaque($obj->destaque);
			return $new;
		}
	}	

}