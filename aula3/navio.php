<?php
header('Content-Type: text/html; charset=utf-8');
require_once "comandante.php";

class Navio{
    public $nome,$bandeira,$comandante;
    public function __construct($nome,$bandeira,Comandante $c){
        $this->nome=$nome;
        $this->bandeira=$bandeira;
        $this->contratar($c);
    }
    public function mostrarInfo(){
        $this->nome;
        $this->bandeira;
        $this->comandante->info();
    }
    public function contratar(Comandante $c){
        $this->comandante=$c;
    }
}
?>