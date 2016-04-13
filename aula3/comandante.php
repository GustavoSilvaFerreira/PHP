<?php
header('Content-Type: text/html; charset=utf-8');
class Comandante{
    public $nome,$nac;
    public function __construct($nome,$nac){
        $this->nome=$nome;
        $this->nac=$nac;
    }
    public function info(){
        echo $this->nome;
        echo $this->nac;
    }
}
?>