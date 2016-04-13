<?php
class Complexo{
    protected $a,$b;
    
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    public function soma(Complexo $x){
        return $this->a + $x->a;
        return $this->b + $x->b;
    }
    public function multiplica(Complexo $x){
        return $this->r * $x->r;
        return $this->i * $x->i;
    }
    public function toString(){
        
    }
}
?>