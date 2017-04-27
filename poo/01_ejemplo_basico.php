<?php 
	/**
	* 
	*/
	class Pokemon
	{
		//Atributos
		public $nombre;
		public $tipo;
		
		//Métodos
		public function setPokemon($nom, $tip)
		{
			$this->nombre 	= $nom;
			$this->tipo		= $tip;
		}
		public function getPokemon()
		{
			return "<li>Nombre:".$this->nombre."</li><li>Tipo:".$this->tipo."</li>";
		}
	}

	//Crear objeto
	$pk	= new Pokemon;
	$pk->setPokemon('Pikachu', 'Eléctrico');
	//Acceso a un atributo público
	echo $pk->nombre;
	//Acceso a un método
	echo "<ul>".$pk->getPokemon()."</ul>";