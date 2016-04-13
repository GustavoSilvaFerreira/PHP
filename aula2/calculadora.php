<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    
    <style>
    	label{
    		display:block;
    	}
    </style>
</head>
<body>
<?php
	class Calculadora{
		public $a,$b;
		public function __construct($a,$b){
			$this->a=$a;
			$this->b=$b;
		}
		public function soma(){
			return $this->a + $this->b;
		}
		public function sub(){
			return $this->a - $this->b;
		}
		public function mult(){
			return $this->a * $this->b;
		}
		public function div(){
			return $this->a / $this->b;
		}
	}
	$cal = new Calculadora($a,$b);
	$cal->a=isset($_POST["v1"])?$_POST["v1"]:10;
	$cal->b=isset($_POST["v2"])?$_POST["v2"]:5;
	$op = isset($_POST["operacao"])?$_POST["operacao"]:"soma";
	
	switch($op){
		case soma:
			echo "Soma: ".$cal->soma()."<br>";
			break;
		case sub:
			echo "Subtração: ".$cal->sub()."<br>";
			break;
		case mult:
			echo "Multiplicação: ".$cal->mult()."<br>";
			break;
		case div:
			echo "Divisão: ".$cal->div()."<br>";
			break;
	}
	
?>
<form method="POST" action="calculadora.php">
	<label>Num 1:<input type="number" name="v1"/></label>
	<label>Num 2:<input type="number" name="v2"/></label>
	<input type="radio" name="operacao" value="soma">Somar<br>
	<input type="radio" name="operacao" value="sub">Subtrair<br>
	<input type="radio" name="operacao" value="mult">Multiplicar<br>
	<input type="radio" name="operacao" value="div">Dividir<br>
	<input type="submit" value="Calcular"/>
</form>
</body>
</html>
