<?php
header('Content-Type: text/html; charset=utf-8');
class Cliente{
    protected $nome;
    protected $saldo;
    protected $limite;
    
    public function __construct($nome,$saldo,$limite){
        $this->nome=$nome;
        $this->saldo=$saldo;
        $this->limite=$limite;
    }
    public function sacar($x){
        if($this->checarSaldo() > $x){
            echo "Saque efetuado! $x <br>";
            $this->saldo-=$x;
        }else{
            echo "Não há quantia suficiente $x <br>";
        }
    }
    public function depositar($x){
        echo "deposito realizado com sucesso. $x <br>";
        $this->saldo+=$x;
    }
    public function checarSaldo(){
        return $this->saldo+$this->limite;
    }
    public function obterNome(){
        return $this->nome;
    }
}
$c=new Cliente("Gustavo",1000.00,500.00);
echo $c->checarSaldo()."<br>";
$c->sacar(1400.00);
echo $c->checarSaldo()."<br>";
$c->depositar(500.00);
echo $c->checarSaldo()."<br>";
echo $c->obterNome()."<br>";
$c->sacar(700.00);
?>