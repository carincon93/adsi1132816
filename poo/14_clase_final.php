<?php 
	/**
	* 
	*/
	final class Fruta
	{
		protected $color;
		protected $clima;

	}

	class Chirimoya extends Fruta
	{

	}
	// Una clase con el modificador final no puede heredar.
	$f = new Chirimoya;