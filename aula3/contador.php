<?php
header('Content-Type: text/html; charset=utf-8');
class Contador{
    public $numero;
    public function __construct(){
        $this->resetar();
    }
    public function increm(){
        $this->numero++;
    }
    public function resetar(){
        $this->numero=0;
    }
}
?>