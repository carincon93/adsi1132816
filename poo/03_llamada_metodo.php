<?php 
	/**
	* 
	*/
	class Table
	{
		public $nf;
		public $nc;

		public function __construct($nf, $nc) 
		{
			$this->nf = $nf;
			$this->nc = $nc;
		}
		public function drawTable()
		{
			echo "<table border='1'>";
			for ($i=0; $i < $this->nf; $i++) 
			{ 
				$this->drawRowStart();
				for ($j=0; $j < $this->nc; $j++) { 
					$this->drawCells();
				}
				$this->drawRowEnd();
			}
			echo "</table>";
		}

		public function drawRowStart()
		{
			echo "<tr>";
		}
		public function drawCells()
		{
			echo "<td>x</td>";
		}
		public function drawRowEnd()
		{
			echo "</tr>";
		}
	}

	$tb = new Table(8,6);
	$tb->drawTable();