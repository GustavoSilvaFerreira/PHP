<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    
<?php
class Produto{
    public $nome;
    public $valor;
    public function __construct($nome,$valor){
        $this->nome=$nome;
        $this->valor=$valor;
    }
}
$nome=isset($_GET["nome"])?$_GET["nome"]:"";
$valor=isset($_GET["valor"])?$_GET["valor"]:null;
$tipo=isset($_GET["metodo"])?$_GET["metodo"]:null;
if($nome!="" && $valor!=null && $tipo!=null){
    $p=new Produto($nome,$valor);
    $banco=new ProdutoDAO();
    $banco->inserir($p);
}
?>
<form method="GET" action="simuladoP1_ex3.php">
    <label><input type="text" name="nome"/></label>
    <label><input type="number" name="valor"/></label>
    <input type="submit" name="metodo" value="xml"/>
    <input type="submit" name="metodo" value="json"/>
</form>
<?php
/*
3) Crie uma classe chamada ProdutoDAO que contenha um método
chamado inserir. Este método recebe um parametro $p Produto
e o insere no banco de dados (Você deve criar uma Tabela com
os campos: id, nome e valor).
*/

class ProdutoDAO{
    
    public function inserir(Produto $p){
        $prod=$p;
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "Simulado");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Produtos(nm_prod,vl_prod) VALUES (?,?)");
        $stmt->bind_param("si",$prod->nome,$prod->valor);
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }else{
            echo "Nome: ".$prod->nome." Valor: ".$prod->valor . " Inserido com sucesso <br>";
        }
        $stmt->close();
    }
}

?>
</body>
</html>