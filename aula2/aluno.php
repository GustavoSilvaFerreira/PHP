<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aluno</title>
</head>
<body>
<?php
	class Aluno{
		public $nome, $nota;
		
		public function estaAprovado(){
			if($this->nota>=6){
				echo "<h1 style='color:green'>O aluno $this->nome está Aprovado </h1><br>";
			}else{
				echo "<h3 style='color:red'> O aluno $this->nome está de P3 </h3><br>";
			}
		}
	}
	$apr = new Aluno();
	$aux = isset($_GET["nome"])?$_GET["nome"]:0;
	echo $aux;
	$apr->nome = $aux;
	
	$apr->nota = isset($_GET["nota"])?$_GET["nota"]:10;

	$apr->estaAprovado();
?>
