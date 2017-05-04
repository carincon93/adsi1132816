<?php
	/**
	* 
	*/
	class Fruta
	{
		protected $color;
		protected $clima;

		public function __construct($color, $clima)
		{
			$this->color = $color;
			$this->clima = $clima;
		}

		public final function getInformacion()
		{
			return $this->color . $this->clima;
		}
	}

	class Chirimoya extends Fruta
	{
		public function getInformacion()
		{
			parent::getInformacion();
		}
	}
	$f = new Chirimoya('Mini', 'Cooper S');