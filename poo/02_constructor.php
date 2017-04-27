<?php 
	/**
	* 
	*/
	class Catalogo
	{
		public $disquera;
		public $artista = array();
		public $album 	= array();
		public $genero 	= array();
		public $ano 	= array();

		public function __construct($dis)
		{
			$this->disquera = $dis;
		}

		public function setCatalogo($art, $alb, $gen, $ano)
		{
			$this->artista[] 	= $art;
			$this->album[] 		= $alb;
			$this->genero[] 	= $gen;
			$this->ano[] 		= $ano;
		}

		public function getCatalogo() 
		{
			for ($i=0; $i < count($this->artista); $i++) { 
				echo "<ul>";
				echo "<li>Artista: ".$this->artista[$i]."</li>";
				echo "<li>Álbum: ".$this->album[$i]."</li>";
				echo "<li>Género: ".$this->genero[$i]."</li>";
				echo "<li>Año: ".$this->ano[$i]."</li>";
				echo "</ul>";
			}
		}
	}
	$cat = new Catalogo('Pink Metal');
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->setCatalogo('Nirvana', 'Never Mind', 'Grunge', 1991);
	$cat->getCatalogo();