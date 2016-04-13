
<?php
class Teste{
    //INTERPOLACAO
    //a pagina form.php é colada aqui, entao aparecera o form e a variavel $data. Como $data recebeu o valor TESTE, este apareceu na pagina.
    public function cadastro(){
        $data = "TESTE";
        require_once "form.php";
    }
    public function formEditar($id){
        $data = $id;
        $voltar= "<a href='/teste/listar'>Voltar para lista</a>";
        require_once "formEdit.php";
    }
    public function ola(){
        echo "Ola <br>";
    }
    public function outro(){
        echo "Outro <br>";
    }
    public function __call($m, $args){
        echo "$m invalido <br>";
    }
    public function insert(){
        $nome = $_POST["nome"];
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "teste");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO User2(nome) VALUES (?)");
        $stmt->bind_param("s",$nome);
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }else{
            echo $nome . " Inserido com sucesso <br>";
        }
        $stmt->close();
        echo "<a href='/teste/cadastro'>Voltar ao Cadastro</a> <a href='/teste/listar'>listar todos</a>";
    }
    public function listar(){
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "teste");
        $stmt = $mysqli->prepare("SELECT * FROM User2");
        $stmt->execute();
        $row = $stmt->get_result()->fetch_all();
        echo "<table border=1><thead><tr><th>ID</th><th>Nome</th></tr></thead><tbody>";
        foreach($row as $usuario){
            echo "<tr><td> $usuario[0] </td><td>$usuario[1]</td><td><a href='/teste/excluir?id=$usuario[0]'>Excluir</a></td>";
            echo "<td><a href='/teste/formEditar?id=$usuario[0]'>Editar</a></td></tr>";
        }
        echo "</tbody></table>";
        $stmt->close();
        echo "<br><a href='/teste/cadastro'>Cadastrar novo</a>";
    }
    // ex 2: fazer uma pagina que execute uma pesquisa pelo id
    public function pesquisa(){
        $dataId = "Pesquisar por ID";
        require_once "form1.php";
    }
    public function pesquisaId(){
        $id = $_POST["id"];
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "teste");
        $stmt = $mysqli->prepare("SELECT * FROM User2 where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_all();
        echo "<ul>";
        foreach($row as $usuario){
            echo "<li> $usuario[1] </li>";
        }
        echo "</ul>";
        $stmt->close();
        echo "<a href='/teste/pesquisa'>Voltar a Pesquisa</a>";
    }
    public function excluir($e){
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "teste");
        $stmt = $mysqli->prepare("DELETE from User2 where id = ?");
        $stmt->bind_param("i",$e);
        $stmt->execute();
        $stmt->close();
        $this->listar();
    }
    public function editar(){
        $id=$_POST["id"];
        $nome=$_POST["nome"];
        $mysqli = new mysqli("127.0.0.1", "gustavoferreira", "", "teste");
        $stmt = $mysqli->prepare("update User2 set nome = ? where id = ?");
        $stmt->bind_param("si",$nome,$id);
        $stmt->execute();
        $stmt->close();
        $this->listar();
    }
}
$a=$_GET["param"];
$b = isset($_GET["id"])?$_GET["id"]:0;
$t=new Teste();
$t->$a($b);
?>
