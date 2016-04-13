<?php
//Associação
// Uma lanterna só funciona com duas pilhas. 
// Cada pilha deve possuir ao menos 10 pontos de durabilidade para manter a lanterna acesa. 
// Dependendo da pilha a durabilidade pode se esgotar com rapidez. 
// É possivel checar a durabilidade de uma pilha e de uma lanterna.
class Pilha{
    public $durabilidade, $qualidade;
    public function __construct($dur,$qua){
        $this->durabilidade=$dur;
        $this->qualidade=$qua;
    }
    public function reduzirDurabilidade(){
        return $this->durabilidade-=$this->qualidade;
    }
    public function checarEstado(){
        return $this->durabilidade;
    }
    public function isFraca(){
        return $this->durabilidade<10;
    }
}
class Lanterna{
    public $p1,$p2;//p1 e p2 se referem a pilha da classe pilha.
    //A palavra pilha indica um Type Hint.
    public function __construct(Pilha $p1,Pilha $p2){
        $this->p1=$p1;
        $this->p2=$p2;
    }
    public function acender(){
        if(is_null($this->p1) || is_null($this->p2)){
            echo "Lanterna sem Pilha(s).";
        }elseif($this->p1->isFraca() || $this->p2->isFraca()){
            echo "Pilha sem carga suficiente";
        }else{
            echo "Lanterna acesa.";
            $this->p1->reduzirDurabilidade();
            $this->p2->reduzirDurabilidade();
        }
    }
    public function checarEstado(){//checa durabilidade das duas pilhas
        echo "Carga pilha 1: ".$this->p1->checarEstado();
        echo "Carga pilha 2: ".$this->p2->checarEstado();
    }
}
$p1=new Pilha(12,2);
$p2=new Pilha(12,2);
$l=new Lanterna($p1,$p2);
$l->acender();
$l->acender();
$l->checarEstado();
?>