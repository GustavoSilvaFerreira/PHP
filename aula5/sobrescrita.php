<?php //Exemplo de como usar sobrescrita
class Animal{
    protected $nome;
    
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function dormir(){
        echo "$this->nome: ZzZzZzzzzz <br>";
    }
    public function comer(){
        echo "$this->nome: Hmmmmmm <br>";
    }
    public function emitirSom(){
        echo "$this->nome: generico";
    }
    //Ele eh chamado quando um metodo não visivel pelo objeto
    //args sao argumentos, não está sendo chamado pq a chamada não tem argumentos
    public function __call($m,$args){
        echo "Bad method $m";
    }
}
class Cachorro extends Animal{
    //Override
    public function emitirSom(){
        echo "$this->nome: AU AU AU <br>";
    }
}
class Gato extends Animal{
    //Override
    public function emitirSom(){
        echo "$this->nome: MIAU MIAU <br>";
    }
}
//Devemos sempre programar pensando na superClasse e nao nas subclasses
$prisao [] = new Cachorro("Rex");
$prisao [] = new Gato("Branco");
$prisao [] = new Gato("Garfield");
$prisao [] = new Cachorro("Fluffy");
foreach ($prisao as $bicho) {
    $bicho->emitirSom();
}
?>