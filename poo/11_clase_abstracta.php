<?php
	/**
	* 
	*/
	abstract class BaseDatos
	{
		protected $conx;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($host, $user, $pass, $nmbd)
		{
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->nmbd = $nmbd;
		}
		public function conexion()
		{
			$this->conx = new mysqli($this->host, $this->user, $this->pass, $this->nmbd);
			if ($this->conx) {
				echo "Conexión exitosa";
			} else {
				echo "No se realizo la conexión";
			}
		}
		public function desconexion()
		{
			mysqli_close($this->conx);
			echo "<li>Se ha desconectado de la BD con éxito</li>";
		}

	}

	class Usuario extends BaseDatos
	{

		public function __construct()
		{
			parent::conexion();
		}
	}

	$user = new Usuario('localhost', 'root', '', 'adsi1132816');
	$user->desconexion();
