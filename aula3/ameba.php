<?php
header('Content-Type: text/html; charset=utf-8');
class Ameba{
    public $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function mostrar(){
        echo "<br>Nome: ".$this->nome;
    }
    public function clonar(){
        return new Ameba($this->nome." clone");
    }
}
$a = new Ameba("Gustavo");
$a->mostrar();
$b=$a->clonar();
$b->mostrar();
?>