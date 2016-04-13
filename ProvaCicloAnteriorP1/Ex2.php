<?php
/*2. (valor 2.5 pontos) Um Cronometro possui minutos e segundos. 
A cada 59 segundos, ´e acrescido 1 minuto. O Cronometro reseta
(minutos e segundos zerados) ap´os se passar 99 minutos e 59 segundos. 
A ´unica funcionalidade do cronometro ´e resetar (zerar minutos e segundos) 
e correr (passa um segundo por chamada de m´etodo). Um Cronometro deve
come¸car SEMPRE com 0 minutos e 0 segundos. Codifique esta classe. */
class Cronometro{
    private $minuto,$seg;
    public function __Construct(){
        $this->resetar();
    }
    public function resetar(){
        $this->minuto=0;
        $this->seg=0;
    }
    public function correr(){
        $this->seg++;
        if($this->minuto == 99 && $this->seg == 59){
            $this->resetar();
        }else if($this->seg == 59){
            $this->seg=0;
            $this->minuto++;
        }
        echo "Minuto: ".$this->minuto ." Segundos: ". $this->seg;
    }
}
$c = new Cronometro();
$i=0;
while($i < 5899){
    $c->correr();
    $i++;
}
?>
