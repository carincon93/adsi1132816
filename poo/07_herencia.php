<?php 
	/**
	* 
	*/
	class OperacionAritmetica
	{
		protected $n1;
		protected $n2;
		protected $rs;

		public function __construct($n1, $n2)
		{
			$this->n1 = $n1;
			$this->n2 = $n2;
		}

		public function getOperacion()
		{
			return $this->rs;
		}
	}

	class Suma extends OperacionAritmetica
	{
		public function calcular()
		{
			$this->rs = $this->n1 + $this->n2;
		}
	}

	class Resta extends OperacionAritmetica
	{
		public function calcular()
		{
			$this->rs = $this->n1 - $this->n2;
		}
	}

	$op = new Suma(5,8);
	$op->calcular();
	echo "La suma es igual a: ".$op->getOperacion()."<br>";

	$op = new Resta(5,8);
	$op->calcular();
	echo "La resta es igual a: ".$op->getOperacion();