<?php
/*
Exercicio: Quadrados e Retangulos são quadrilateros, 
É possível calcular Área e Perímetro de ambos.
Um Quadrado tem 1 atributo Lado e o 
Retangulo 2 atributos Lado.
Desenhe o diagrama de classe e implemente todas.
*/
//INTERFACE: Tudo é publica e abstrata.
//
interface Quadrilateros{
    const PI = 3.14;
    function area();
    function perimetro();
}
echo Quadrilateros::PI;
class Quadrado implements Quadrilateros{
    private $lado;
    public function __construct($lado){
        $this->lado=$lado;
    }
    public function area(){
        return $this->lado*$this->lado;
    }
    public function perimetro(){
        return $this->lado*4;
    }
}
class Retangulo implements Quadrilateros{
    private $base;
    private $altura;
    public function __construct($base,$altura){
        $this->base=$base;
        $this->altura=$altura;
        //parent::__construct($altura);
        //Java: super(altura)
    }
    public function area(){
        return $this->base*$this->altura;
    }
    public function perimetro(){
        return ($this->base*2)+($this->altura*2);
    }
}
$q=new Quadrado(10);
$r=new Retangulo(20,10);
echo $q->area()."<br>";
echo $q->Perimetro()."<br>";
echo $r->area()."<br>";
echo $r->perimetro()."<br>";
?>
