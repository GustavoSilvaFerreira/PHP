<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Revolver</title>
</head>
<body>
<?php
/*
Exercício: Crie uma classe 
Revolver Contendo:
--> Atributos: Municao, maxMunicao
--> Metodos: atirar(), recarregar()
Um revolver atira uma bala se houver e recarrega uma bala se houver espaço.
*/
	class Revolver{
		public $municao, $maxMunicao;
		
	
		public function atirar(){
		    if($this->municao<=0){
		        echo "Não há munição <br>";
		    }else{
		        $this->municao--;
		    }
		}
		public function recarregar(){
		     if($this->municao>=$this->maxMunicao){
		        echo "Revolver está cheio <br>";
		    }else{
		        $this->municao++;
		    }
		}
		public function mostrarDados(){
		    echo "Munição: ".$this->municao;
		    echo "<br>Max. Munição: ".$this->maxMunicao;
		}
	}
	$r = new Revolver();
	$r->maxMunicao=6;
    $r->recarregar();
    $r->recarregar();
    $r->recarregar();
    $r->recarregar();
    $r->recarregar();
    $r->recarregar();
    $r->recarregar();
    $r->atirar();
    $r->atirar();
    $r->atirar();
    $r->atirar();
    $r->atirar();
    $r->atirar();
    $r->atirar();
    $r->mostrarDados();
?>
</body>
</html>
