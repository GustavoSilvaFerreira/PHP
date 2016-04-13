<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1.2</title>
    <style>
        fieldset{
            width: 500px;
        }
    </style>
</head>
<body>

<?php
/*
Exercício 1.2. Implemente uma classe Lâmpada com os seguintes
componentes, e faça um teste ao final:
Atributos: estado(String)
Métodos:
• click(): ao chamar este método a lâmpada é colocada no estado "apagada", caso esteja "acesa", e é colocado no estado
"acesa"caso esteja "apagada".
• qtdAcendimentos(): retorna quantas vezes a lâmpada foi acesa
(DICA: este método deve ser chamada no método acima).
• checaEstado(): retorna o estado atual da Lâmpada.
*/
class Lampada{
    public $estado,$qtdAc;
    public function __construct(){
        $this->estado="apg";
        $this->qtdAc=0;
    }
    public function click(){
        if($this->estado=="ace"){
            $this->estado="apg";
            echo "apg <br>";
        }else{
            $this->estado="ace";
            echo "aces <br>";
            $this->qtdAc++;
        }
    }
    public function qtdAcendimentos(){
        echo "Quantidade acendimentos: ".$this->qtdAc."<br>";
    }
    public function checarEstado(){
        echo "Estado: ".$this->estado."<br>";
    }
}
$opc=isset($_POST["opc"])?$_POST["opc"]:"";
$l = new Lampada();
$l->click();
$l->click();
$l->click();
$l->click();
$l->click();
$l->click();
$l->qtdAcendimentos();
$l->checarEstado();

?>
</body>
</html>