<?php 
	/**
	* 
	*/
	class Vehiculo
	{
		private $tipo;
		private $marca;
		private $referencia;

		public function __construct($marca, $referencia, $tipo = 'Sedan' )
		{
			$this->tipo 		= $tipo;
			$this->marca 		= $marca;
			$this->referencia 	= $referencia;
		}

		public function getVehiculo()
		{
			echo "Tipo: ".$this->tipo."<br>";
			echo "Marca: ".$this->marca."<br>";
			echo "Referencia: ".$this->referencia->getReferencia()."<hr>";
		}
	}

	class Volkswagen
	{
		private $referencia;

		public function __construct($ref)
		{
			$this->referencia = $ref;
		}
		public function getReferencia()
		{
			if ($this->referencia == 1) return 'Gol';
			if ($this->referencia == 2) return 'Polo';
			if ($this->referencia == 3) return 'Jetta';
		}
	}
	$vk1 = new Volkswagen(1);
	$vh1 = new Vehiculo('Volkswagen', $vk1, 'Coupé/Sedan');
	$vh1->getVehiculo();

	$vk2 = new Volkswagen(2);
	$vh2 = new Vehiculo('Volkswagen', $vk2, 'Coupé');
	$vh2->getVehiculo();

	$vk3 = new Volkswagen(3);
	$vh3 = new Vehiculo('Volkswagen', $vk3);
	$vh3->getVehiculo();