<?php
/*1. (valor 2.5 pontos) Em um sistema de bibliotecas ´e poss´ıvel alugar 
Livros. Um Livro possui um nome, um autor e um indicador de disponibilidade. 
Uma Estante possui v´arios livros e uma identifica¸c˜ao. Vocˆe deve modelar 
uma pequena rotina de empr´estimos. A entidade Estante pode listar todas as 
informa¸c˜oes de todos os Livros que ela possui emprestados ou n˜ao. Uma Estante 
tamb´em lista os livros n˜ao emprestados apenas. Um Livro pode ter sua informa¸c˜ao 
exibida e pode ser emprestado (caso j´a n˜ao esteja). Neste problema n˜ao h´a 
quantidades (suponha haver apenas um livro de cada). (a) (0.5) Esboce o diagrama de 
classes. (b) (2.0) Codifique as classes. */
class Livro{
    private $nome,$autor,$disponibilidade;
    public function __Construct($nome,$autor){
        $this->nome=$nome;
        $this->autor=$autor;
        $this->disponibilidade=true;
    }
    public function informacao(){
        echo "Nome: ".$this->nome;
        echo " Autor: ".$this->autor;
        echo " Disponivel: ".$this->disponibilidade."<br>";
    }
    public function emprestar(){
        if($this->disponibilidade == true){
            $this->disponibilidade = false;
            echo "Livro foi emprestado. <br>";
        }else{
            echo "Livro indisponivel. <br>";
        }
    }
    public function getDisponivel(){
        return $this->disponibilidade;
    }
}
class Estante{
    private $livros,$identificacao;
    public function __Construct($identificacao){
        $this->identificacao=$identificacao;
        $livros=[];
    }
    public function listarTodos(){
        foreach($this->livros as $l){
            $l->informacao();
        }
    }
    public function listarDisponiveis(){
        foreach($this->livros as $l){
            if($l->getDisponivel() == true){
                $l->informacao(); 
            }
        }
    }
    public function inserirLivro($l){
        $this->livros[]=$l;
    }
}
$l1 = new Livro("livro1","autor1");
$l2 = new Livro("livro2","autor2");
$l3 = new Livro("livro3","autor3");
$l4 = new Livro("livro4","autor4");
$l5 = new Livro("livro5","autor5");
$l2->emprestar();
$l5->emprestar();
$e = new Estante("Terror");
$e->inserirLivro($l1);
$e->inserirLivro($l2);
$e->inserirLivro($l3);
$e->inserirLivro($l4);
$e->inserirLivro($l5);
$e->listarTodos();
$e->listarDisponiveis();
?>