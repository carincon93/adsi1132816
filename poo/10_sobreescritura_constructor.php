<?php
	/**
	* 
	*/
	class Consola
	{
		protected $modelo;	
		protected $nombre;	
		protected $almacenamiento;
		public function __construct($modelo, $nombre, $almacenamiento)
		{
			$this->modelo = $modelo;	
			$this->nombre = $nombre;	
			$this->almacenamiento = $almacenamiento;
		}
		public function getConsola()
		{
			echo "<li>Modelo: ".$this->modelo."</li>";
			echo "<li>Nombre: ".$this->nombre."</li>";
			echo "<li>Almacenamiento: ".$this->almacenamiento."</li>";
		}
	}

	class Nintendo extends Consola
	{
		public function __construct()
		{
			parent::__construct('e','f','g');
		}
	}
	$dep = new Nintendo('a','b','c');
	$dep->getConsola();