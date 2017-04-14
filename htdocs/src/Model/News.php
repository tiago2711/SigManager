<?php

class News
{
	private $id;
	private $titulo;
	private $autor;
	private $text;
	private $img;
	private $destaque;
	
	public function __construct()
	{

	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setAutor($autor)
	{
		$this->autor = $autor;
	}
	public function getAutor()
	{
		return $this->autor;
	}

	public function setTexto($text)
	{
		$this->text = $text;
	}
	public function getTexto()
	{
		return $this->text;
	}

	public function setImg($img)
	{
		$this->img = $img;
	}
	public function getImg()
	{
		return $this->img;
	}

	public function setDestaque($destaque)
	{
		$this->destaque = $destaque;
	}
	public function getDestaque()
	{
		return $this->destaque;
	}


}