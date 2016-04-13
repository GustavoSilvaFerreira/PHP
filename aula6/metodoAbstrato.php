<?php
/*
Exercicio: Quadrados e Retangulos são quadrilateros, 
É possível calcular Área e Perímetro de ambos.
Um Quadrado tem 1 atributo Lado e o 
Retangulo 2 atributos Lado.
Desenhe o diagrama de classe e implemente todas.
*/
// CLASSES ABSTRATAS: Representa uma generalização de um conceito.
// -> não pode ser instânciada;
// -> Pode possuir métodos abstratos(concretos também);
// -> Pode possuir atributos.
//MÉTODO ABSTRATO: Sem corpo de códico. Seu intuito é representar uma ação que tem dependência de suas subclasses.
// Todo método abstrato deve ser sobrescrito em uma classe concreta.
abstract class Quadrilateros{
    /*protected $lado;
    public function __construct($lado){
        $this->lado=$lado;
    }*/
    public abstract function area();//sentido metodo abstract: ser sobrescrito
    public abstract function perimetro();
}
class Quadrado extends Quadrilateros{
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
class Retangulo extends Quadrilateros{
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
