<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1.1</title>
    <style>
        fieldset{
            width: 200px;
        }
    </style>
</head>
<body>

<form method="post" action="exercicio1.php">
    <label>Nome:<input type="text" name="nome" required/></label>
    <label>Ano:<input type="number" name="idade" required/></label>
    <fieldset required>
        <legend>Sexo</legend>
        <label><input type="radio" name="sexo" value="feminino"/>Feminino</label>
        <label><input type="radio" name="sexo" value="masculino"/>Masculino</label>
    </fieldset>
    <fieldset required>
        <legend>Vegetariano(a)</legend>
        <label><input type="radio" name="vegetariano" value="true" />Sim</label>
        <label><input type="radio" name="vegetariano" value="false" />Não</label>
    </fieldset>
    <input type="submit" value="Calcular"/>
</form>
<?php
header('Content-Type: text/html; charset=utf-8');
/*
Exercício 1.1. Dada a classe Pessoa, que possuí os atributos: String
nome, String sexo, int idade, boolean vegetariana. Faça agora uma
classe Churrasco que possua:
Atributos: qtdCarne(double);
Método: verificarConsumo(): Recebe via parâmetro uma Pessoa, e com
isto define a consumação média de carne(quantidade de carne consumida), pessoas de 0 a 3 anos não consomem, vegetarianos também não.
Pessoas de 4 a 12 anos consomem 1 kilo de carne e de 13 anos em diante 2 kilos de carne.
*/
class Pessoa{
    public $nome,$sexo,$idade,$vegetariana;
    public function __construct($nome,$sexo,$ano,$vegetariana){
        $this->nome=$nome;
        $this->sexo=$sexo;
        $this->idade=$ano;
        $this->vegetariana=$vegetariana;
    }
    public function idade(){
        return date(Y)-$this->idade;
    }
    public function mostraDados(){
        echo "Nome: ".$this->nome;
        echo " Sexo: ".$this->sexo;
        echo " Idade: ".$this->idade()." anos ";
        if($this->vegetariana=="true"){
            echo " Vegetariano(a): sim";
        }else{
            echo " Vegetariano(a): não";
        }
    }
}
class Churrasco{
    public $qtdCarne;
    public function verifConsumo(Pessoa $p){
        if($p->idade()<=3 || $p->vegetariana=="true"){
            echo "Não há consumo de carne.";
        }elseif($p->idade()>=4 && $p->idade()<=12){
            echo "Consumo: 1 kg";
        }else{
            echo "Consumo: 2 kg";
        }
    }
}
$nome=isset($_POST["nome"])?$_POST["nome"]:"";
$ano=isset($_POST["idade"])?$_POST["idade"]:-1;
$sexo=isset($_POST["sexo"])?$_POST["sexo"]:"";
$vegetariano=isset($_POST["vegetariano"])?$_POST["vegetariano"]:null;

if($nome!=""&&$ano!=-1&&$sexo!=""&&$vegetariano!=null){
    $p=new Pessoa($nome,$sexo,$ano,$vegetariano);
    echo $p->mostraDados()."<br>";
    $c=new Churrasco();
    $c->verifConsumo($p);
}

?>

</body>
</html>