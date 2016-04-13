<?php
class Animal{
    protected $nome;
    
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function dormir(){
        echo "$this->nome: ZzZzZzzzzz <br>";
    }
    public function comer(){
        echo "$this->nome: Hmmmmmm <br>";
    }
    //Ele eh chamado quando um metodo não visivel pelo objeto
    public function __call($m,$args){//args sao argumentos, não está sendo chamado pq a chamada não tem argumentos
        echo "Bad method $m";
    }
}
class Cachorro extends Animal{
    public function latir(){
        echo "$this->nome: AU AU AU <br>";
    }
}
class Gato extends Animal{
    public function miar(){
        echo "$this->nome: MIAU MIAU <br>";
    }
}
$c = new Cachorro("Rex");
$c->latir();
$c->comer();
$c->dormir();

$g = new Gato("Pimpolho");
$g->miar();
$g->comer();
$g->dormir();

//variavel variavel
//$acao= $_GET["acao"];
//$c->$acao();

// instancie um objeto Animal usando parametro GET e uma variavel variavel.
$animal= $_GET["animal"];
$fazer = $_GET["fazer"];
$a = new $animal($_GET["nome"]);
$a->$fazer();
?>