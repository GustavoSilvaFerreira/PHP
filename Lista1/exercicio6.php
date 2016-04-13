<?php
header('Content-Type: text/html; charset=utf-8');
class TrianguloEquilatero{
    protected $lado,$perimetro,$area;
    
    public function __construct($lado){
        $this->lado=$lado;
    }
    public function calcArea(){
        $this->area= $this->lado*(sqrt(3)/2);
    }
    public function calcPerimetro(){
        $this->perimetro= $this->lado*3;
    }
    public function getArea(){
        return $this->area;
    }
    public function getPerimetro(){
        return $this->perimetro;
    }
    public function getLado(){
        return $this->lado;
    }
}
$t=new TrianguloEquilatero(10);
$t->calcArea();
$t->calcPerimetro();
echo "Area: ".$t->getArea()."<br>";
echo "Perimetro: ".$t->getPerimetro()."<br>";
echo "Lado: ".$t->getLado()."<br>";
?>