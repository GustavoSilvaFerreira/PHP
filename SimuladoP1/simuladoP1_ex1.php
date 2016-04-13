<?php
/*1) Crie a classe Produto. Esta classe possui dois atributos
nome e valor. Faca os métodos toXML() e toJSON() que mostra
um Produto em formato JSON e XML respectivamente.
Exemplo:
a) XML:
<Produto>
   <nome> Lapis </nome>
   <valor> 1.50 </valor>
</Produto>
b) JSON: {nome : "Lapis", valor : 1.50}*/
class Produto{
    private $nome,$valor;
    public function __construct($nome,$valor){
        $this->nome=$nome;
        $this->valor=$valor;
    }
    public function toXML(){
        header('content-type: text/xml'); //Seta o response para enxergar XML
        echo "<Produto><nome>". $this->nome ."</nome><valor>". $this->valor ."</valor></Produto>";
    }
    public function toJson(){
        header('content-type: application/json');
        echo json_encode($this);
    }
}
$p=new Produto('Lapis',1.50);
//$p->toXML();
$p->toJSON();

//testar pela linha de comando.
//curl --data "metodo=toJson&nome=Papel&valor=10" https://aulaphp-gustavoferreira.c9users.io/simuladoP1_ex2
?>

