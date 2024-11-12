<? 
include "funcoes.php";

if(isset($_GET["editar"])){
    $index = $_GET["editar"];
    $usuarios = carregarUsuarios();
    if(isset($usuarios[$index])){
        $usuarioAtual=$usuarios[$index]["usuario"];
        $senhaAtual=$usuarios[$index]["senha"];
    }else{
        echo "Usuário não encontrado!";
        exit;
    }
}

//processa alteração usuário

if($_SERVER["REQUEST_METHOD"]=="POST"&& isst ($_POST["senha"])){
    $novo
}