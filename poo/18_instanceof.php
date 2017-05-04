<?php
	/**
	 * 
	 */
	class Pokemon
	{
		protected $nombre;
		protected $tipo;
		
		public function __construct($nombre)
		{
			$this->nombre = $nombre;
		}

		public function setTipo($tipo)
		{
			if ($tipo instanceof Electrico) $this->tipo = 'Electrico';
			if ($tipo instanceof Fuego) 	$this->tipo = 'Fuego';
			if ($tipo instanceof Agua) 		$this->tipo = 'Agua';
		}

		public function getInfo()
		{
			return "Nombre: ".$this->nombre." ".$this->tipo."<br>";
		}
	}

	class Electrico extends Pokemon	{}
	class Fuego extends Pokemon {}
	class Agua extends Pokemon {}


	$pk1 = new Electrico('Pikachu');
	$pk1->setTipo($pk1);
	echo $pk1->getInfo();
	$pk2 = new Fuego('Charmander');
	$pk2->setTipo($pk2);
	echo $pk2->getInfo();
	$pk3 = new Agua('Squirtle');
	$pk3->setTipo($pk3);
	echo $pk3->getInfo();