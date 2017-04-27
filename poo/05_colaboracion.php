<?php
	/**
	* 
	*/
	class Pokemon
	{
		private $nombre;
		private $evolucion;
		private $colaboracion;

		public function __construct($nom, $evo)
		{
			$this->nombre = $nom;
			$this->evolucion = $evo;
			// Colaboración de Objetos
			$this->colaboracion = new Evolucionar();

		}
		public function evoPokemon()
		{
			$this->colaboracion->evolucionarPokemon($this->nombre, $this->evolucion);
		}
	}

	class Evolucionar
	{
		
		public function evolucionarPokemon($nom, $evo)
		{
			echo "<li>".$nom." ha evolucionado a un ".$evo."</li>";
		}
	}

	$pk1 = new Pokemon('Pichu', 'Pikachu');
	$pk1->evoPokemon();

	$pk2 = new Pokemon('Pikachu', 'Raichu');
	$pk2->evoPokemon();
