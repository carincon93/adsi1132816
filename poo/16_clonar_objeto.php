<?php
	/**
	* 
	*/
	class Fruta
	{
		private $nombre;
		private $color;
		private $clima;

		public function __construct($nombre, $color, $clima)
		{
			$this->nombre = $nombre;
			$this->color = $color;
			$this->clima = $clima;
		}

		public function getInformacion()
		{
			return $this->nombre ." ". $this->color ." ". $this->clima;
		}
	}
	$objeto1 = new Fruta('Manzana', 'Rojo', 'Frio');
	$objeto2 = clone($objeto1);
	echo $objeto2->getInformacion();