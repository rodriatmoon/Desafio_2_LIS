<?php
	//Definición de la clase
	class libro {
		private $Nautor;
		private $Aautor;
		private $titulo;
		private $edicion;
		private $lugar;
		private $editorial;
		private $year;
		private $Npaginas;
		private $notas;
		private $isbn;
		//Método constructor
		function __construct($Nautor='', $Aautor='', $titulo='', $edicion='', $lugar='', $editorial='', $year=0, $Npaginas=0, $notas='', $isbn=''){
		$this->Nautor = $Nautor;
		$this->Aautor = $Aautor;
		$this->titulo = $titulo;
		$this->edicion = $edicion;
		$this->lugar = $lugar;
		$this->editorial = $editorial;
		$this->year = $year;
		$this->Npaginas = $Npaginas;
		$this->notas = $notas;
		$this->isbn = $isbn;
	}
	
	//Métodos de la clase
		function mostrar(){
			$tabla = "<div class='col-4 mb-3'>";
			$tabla .="<div class='card'>";
			$tabla .="<div class='card-header'>". $this->isbn ."</div>";
			$tabla .="<img class='card-img-top' src='img/libro.png' alt='Card image cap'>";
			$tabla .="<div class='card-body'>";
			$tabla .="<h5 class='card-title'> ". $this->titulo ."<sup>". $this->edicion ."</sup> (" . $this->year . ")</h5>";
			$tabla .="<p class='card-text' style='text-align: justify;'> Autor: ". $this->Aautor . ", " . $this->Nautor . "<br>";
			$tabla .="Número de paginas: ". $this->Npaginas ."<br>";
			$tabla .="Editorial: ". $this->editorial ."<br>";
			$tabla .="Lugar de la publicación: ". $this->lugar ."<br>";
			$tabla .="Notas: ". $this->notas ."</p>";
			$tabla .="</div>";
			$tabla .="</div>";
			$tabla .="</div>";
			echo $tabla;
		}
	}
?>
