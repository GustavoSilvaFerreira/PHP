<?php
/*
Exercicio: 
Uma loja vende tres tipos de produtos:
Livros, Filmes e Material (de escritorio).
Todo produto possui um preco. A cada mes em um dia especifico os 
livros ganham um desconto de 10%,
Filmes 20% e os
Materiais 15%.
O preco deve ser mostrado na tela e não atualizado.
Desenhe um diagrama de classes e implemente todas.

Feito isso, faca um teste com um vetor de 6 produtos e mostre na tela os precos em promocao.
*/
class Produtos{
    protected $nome,$preco;
    public function __construct($nome,$preco){
        $this->nome=$nome;
        $this->preco=$preco;
    }
    public function promocao(){
        echo "Produto nao existente";
    }
}
class Livros extends Produtos{
    public function promocao(){
        echo "$this->nome na Promocao: ". ($this->preco-($this->preco*0.10))."<br>";
    }
}
class Filmes extends Produtos{
    public function promocao(){
        echo "$this->nome na Promocao: ". ($this->preco-($this->preco*0.20))."<br>";
    }
}
class Materiais extends Produtos{
    public function promocao(){
        echo "$this->nome na Promocao: ". ($this->preco-($this->preco*0.15))."<br>";
    }
}

$lista []=new livros("livro",10.00);
$lista []=new Filmes("filme",20.00);
$lista []=new Materiais("material",15.00);
$lista []=new livros("livro",10.00);
$lista []=new Filmes("filme",20.00);
$lista []=new Materiais("material",15.00);
foreach ($lista as $prod) {
    $prod->promocao();
}

?>