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
		class Sumar extends OperacionAritmetica
		{
			
			public function calcular()
			{
				$this->rs = $this->n1 + $this->n2;
			}
		}
	
		class Restar extends OperacionAritmetica
		{
			
			public function calcular()
			{
				$this->rs = $this->n1 - $this->n2;
			}
		}

		class Multiplicar extends OperacionAritmetica
		{
			
			public function calcular()
			{
				$this->rs = $this->n1 * $this->n2;
			}
		}
		
		class Dividir extends OperacionAritmetica
		{
			
			public function calcular()
			{
				$this->rs = $this->n1 / $this->n2;
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
     <form action="" method="POST">
     	<fieldset>
     		<label for="operadores">Operadores</label>
     		<select name="operadores">
     			<option value="">Selecciona un operador</option>
     			<option value="sumar">Sumar</option>
     			<option value="restar">Restar</option>
     			<option value="multiplicar">Multiplicar</option>
     			<option value="dividir">Dividir</option>
     		</select>
     		<label for="n1">Número 1</label>
     		<input type="number" name="n1">
     		<label for="n2">Número 2</label>
     		<input type="number" name="n2">
     		<button type="submit">Calcular</button>
     	</fieldset>
     </form>

     <?php 
     	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     		$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$op = $_POST['operadores'];

			if ($op == 'sumar') 
			{
				$op = new Sumar($n1, $n2);
				$op->calcular();
				echo "La suma es igual a: ".$op->getOperacion()."<br>";
			}
			if ($op == 'restar') 
			{
				$op = new Restar($n1, $n2);
				$op->calcular();
				echo "La resta es igual a: ".$op->getOperacion();
			}
			if ($op == 'multiplicar') 
			{
				$op = new Multiplicar($n1, $n2);
				$op->calcular();
				echo "La multiplicación es igual a: ".$op->getOperacion();
			}
			if ($op == 'dividir') 
			{
				$op = new Dividir($n1, $n2);
				$op->calcular();
				echo "La división es igual a: ".$op->getOperacion();
			}

     	}
     ?>
 
   </body>
 </html>