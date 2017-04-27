<?php 
	/**
	* 
	*/
	class Persona
	{
		public $documento;
		private $nombre;
		private $edad;

		public function __construct($doc, $nom, $eda)
		{
			$this->documento = $doc;
			$this->nombre 	= $nom;
			$this->edad 	= $eda;
		}
		public function getData()
		{
			echo "Documento: ".$this->getDocumento()."<br>";
			echo "Nombre: ".$this->getNombre()."<br>";
			echo "Edad: ".$this->getEdad()."<br>";
		}

		private function getDocumento()
		{
			return $this->documento;
		}
		private function getNombre()
		{
			return $this->nombre;
		}
		private function getEdad()
		{
			return $this->edad;
		}
	}
	$per = new Persona(75001, 'Camilo', 24);
	$per->getData();
	//echo $per->documento; //Correcto
	//echo $per->nombre; 	//Error

