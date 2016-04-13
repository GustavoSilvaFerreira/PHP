<?php
// Encapsulamento: conceito que permite esconder o estado (ou métodos) de um objeto.
// Ha três modificadores de acesso, em PHP, que são:
// Public: qualquer classe acessa o membro.
// Private: Apenas a própria classe acessa o membro.
// Protected: Apenas a própria classe ou subclasse acessam o membro.
//Acessos:
// Atributo: leitura e escrita;
// Método: chamada.
//Atributos sempre privado e metodos (quase) sempre publico
//DATA HIDING
// Metodo Setter: Dar acesso de escrita
// Metodo Getter: Dar acesso de leitura
// EXERCICIO 1
echo "EXERCICIO 1 <br>";
class Foo{
    public $x;
    private $y;
    public function ola1(){
        echo "Metodo Public <br>";
    }
    private function ola2(){
        echo "Metodo Privado <br>";
    }
}
$f=new Foo();
$f->x=3;
//$f->y=5; NÃO PODE SER ACESSADO POIS ESTÁ PRIVADO
echo "$f->x <br>";
//echo "$f->y <br>"; NÃO PODE SER ACESSADO POIS ESTÁ PRIVADO
$f->ola1();
//$f->ola2(); NÃO PODE SER ACESSADO POIS ESTÁ PRIVADO


// EXERCICIO 2
echo "EXERCICIO 2 <br>";
class Foo1{
    private $atr;
    
    public function getAtr(){
        return $this->atr;
    }
    public function setAtr($atr){ // BOSTA, Não usar
        $this->atr = $atr;
    }
}

$f1=new Foo1();
$f1->setAtr(8);
echo $f1->getAtr()." <br>";


// EXERCICIO 3
echo "EXERCICIO 3 <br>";
class Pessoa{
    private $nome,$idade,$estagio;
    
    public function __construct($nome,$idade){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->estagio=$this->ajustaEstagio();;
    }
    public function verFilmeProibido(){
        if($this->idade >=18){
            echo "UHUUU...";
        }else{
            echo "Proibidao p menores";
        }
    }
    public function verEstagio(){
            return $this->estagio;
    }
    public function aniversario(){
        $this->idade++;
        $this->ajustaEstagio();
    }
    private function ajustaEstagio(){
        if($this->idade>13 && $this->idade<18){
            $this->estagio = "Adolescente.";
        }elseif($this->idade<=13){
            $this->estagio = "Crianca.";
        }else{
            $this->estagio = "Maior.";
        }
    }
}
$p=new Pessoa("Joaozinho",10);
?>