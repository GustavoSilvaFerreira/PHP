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
        if($aux=$this->checarSaldo() > $x){
            $this->saldo-=$x;
        }else{
            echo "Não há quantia suficiente $x <br>";
        }
        return $aux;
    }
    public function depositar($x){
        $this->saldo+=$x;
    }
    public function checarSaldo(){
        return $this->saldo+$this->limite;
    }
    public function obterNome(){
        return $this->nome;
    }
}
class Doc{
    public function transferir(Cliente $c1,Cliente $c2,$valor){
        if($c2->sacar($valor)){
            $c1->depositar($valor);
            echo "Transferência realizada com sucesso.<br>";
            echo "Cliente ".$c2->obterNome()." transferiu $valor reais para o cliente ".$c1->obterNome()."<br>";
        }
    }
}
$c1=new Cliente("Gustavo",500,500);
$c2=new Cliente("Denise",1000,500   );
$d=new Doc();
echo "Saldo ".$c1->obterNome().": ".$c1->checarSaldo()."<br>";
echo "Saldo ".$c2->obterNome().": ".$c2->checarSaldo()."<br>";
$d->transferir($c1,$c2,500);
echo "Saldo ".$c1->obterNome().": ".$c1->checarSaldo()."<br>";
echo "Saldo ".$c2->obterNome().": ".$c2->checarSaldo()."<br>";
$d->transferir($c1,$c2,2000);
echo "Saldo ".$c1->obterNome().": ".$c1->checarSaldo()."<br>";
echo "Saldo ".$c2->obterNome().": ".$c2->checarSaldo()."<br>";
?>