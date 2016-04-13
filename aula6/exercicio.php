<?php
/*
Exercicio: Um animal pode emitirSom e dormir.
Um cachorro pode cavar,
O gato pode arranhar e
O Urso hibernar.
Gato, cachorro e urso são animais.
Um transformer e um iDog são robos.
Eles podem recarregar e desligar.
Sabe-se também que o gato, o cachorro e o iDog podem brincar e o 
Urso, Cachorro e o transformer podem matar.

--> todos os metodos devem conter apenas echo.
*/
interface Animal{
    
    function emitirSom();
    function dormir();
}
class Cachorro extends Animal{
    private $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function cavar(){
        echo "Cachorro CAVOU";
    }
    public function brincar(){
        echo "Cachorro BRINCOU";
    }
    public function matar(){
        echo "Cachorro MATOU";
    }
    public function emitirSom(){
        echo "AU AU AU";
    }
}
class Gato extends Animal{
    private $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function arranhar(){
        echo "Gato ARRANHOU";
    }
    public function brincar(){
        echo "Gato BRINCOU";
    }
    public function emitirSom(){
        echo "MIAU MIAU MIAU";
    }
}
class Urso extends Animal{
    private $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function hibernar(){
        echo "Urso HIBERNOU";
    }
    public function matar(){
        echo "Urso MATOU";
    }
    public function emitirSom(){
        echo "urrrrrrrrrrrrrrgh";
    }
}
class Robo{
    public function recarregar(){
        echo "RECARREGOU";
    }
    public function desligar(){
        echo "DESLIGOU";
    }
}
class Transformer extends Robo{
    private $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function matar(){
        echo "Transformer MATOU";
    }
}
class Idog extends Robo{
    private $nome;
    public function __construct($nome){
        $this->nome=$nome;
    }
    public function brincar(){
        echo "iDog BRINCOU";
    }
}

?>
