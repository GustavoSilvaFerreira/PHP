<?php
class Cliente{
    protected $nome, $cpf,$tel;
    
    public function __construct($nome,$cpf){
        $this->nome=$nome;
        $this->cpf=$cpf;
    }
    public function mostrarDados(){
        echo "Nome: $this->nome CPF: $this->cpf DDD: ".$this->tel->obterDDD()." Telefone: ".$this->tel->obterNum();
    }
    public function addTelefone(Telefone $tel){
        $this->tel=$tel;
    }
}
class Telefone{
    protected $ddd,$tel;
    
    public function __construct($ddd,$tel){
        $this->ddd=$ddd;
        $this->tel=$tel;
    }
    public function obterNum(){
        return $this->tel;
    }
    public function obterDDD(){
        return $this->ddd;
    }
}
$c=new Cliente("Gustavo","32780998857");
$t=new Telefone("013","33911065");
$c->addTelefone($t);
$c->mostrarDados();
?>