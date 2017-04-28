<?php 

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
		}
		public function desconexion()
		{
			mysqli_close($this->conx);
			echo "<li>Se ha desconectado de la BD con éxito</li>";
		}

	}

	class Usuario extends BaseDatos	{

		public function __construct($host, $user, $pass, $nmbd)
		{
			parent::__construct($host, $user, $pass, $nmbd);
			parent::conexion();
		}

		public function getUsuarios()
		{
			return $this->conx->query("SELECT * FROM usuarios");
		}
	}	
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <h2>Usuarios</h2>
    <ul>
    	<?php 
    		$user = new Usuario('localhost', 'root', '', 'adsi1132816');
    		$users = $user->getUsuarios();
    	 ?>
		<?php foreach ($users as $value): ?>
			<?php echo "<li>".$value['nombres']."</li>"; ?>
		<?php endforeach ?>
    </ul>

  </body>
</html>