<?php
class Produto{
    public $nome;
    public $valor;
    public function __construct($nome,$valor){
        $this->nome=$nome;
        $this->valor=$valor;
    }
    public function toXML(){
        //Seta o response para enxergar XML
        header('content-type: text/xml');
        echo "<Produto><nome>". $this->nome ."</nome><valor>". $this->valor ."</valor></Produto>";
    }
    
    public function toJSON(){
        header('content-type: application/json');
        echo json_encode($this);
    }
}
$nome=isset($_GET["nome"])?$_GET["nome"]:"";
$valor=isset($_GET["valor"])?$_GET["valor"]:null;
$tipo=isset($_GET["metodo"])?$_GET["metodo"]:null;
if($nome!="" && $valor!=null && $tipo!=null){
    $p=new Produto($nome,$valor);
    if($tipo=="xml"){
        $p->toXML();
    }else{
        $p->toJSON();
    }
}
/*2) Crie um formulario contendo os campos baseados na classe
acima e dois botões com valores (XML e JSON). Ao clicar em
XML, mostre o formato XML e em JSON o formato JSON.
OBS: Você deve usar a classe acima já criada.*/
?>
