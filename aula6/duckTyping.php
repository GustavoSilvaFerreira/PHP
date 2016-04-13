<?php
class Humano{
    public function nadar(){
        echo "nadou <br>";
    }
    public function grasnar(){
        echo "Pegou a fantasia de Pato e gritou Quack Quack <br>";
    }
}
class Pato{
    public function nadar(){
        echo "nadou <br>";
    }
    public function grasnar(){
        echo "Quack Quack <br>";
    }
}
class Floresta{
    //no php basta ter o metodo definido para a chamada do metodo acontecer.
    public function agir($alguem){
        $alguem->nadar();
        $alguem->grasnar();
    }
}
$p = new Pato();
$h=new Humano();
$f=new Floresta();

$f->agir($p);
$f->agir($h);
//Pato e humano não possuem relação
//herança (ou interface), ou seja,
//uma não é subtipo da outra
?>