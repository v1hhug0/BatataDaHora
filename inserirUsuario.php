<?php include("cabecalho.php");
include("conexao.php");
include("dbUsuarios.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$senha = $_POST['senha'];
$tipo_usuario = $_POST['tipo_usuario'];
if (empty($nome) || empty($email) || empty($telefone) || empty($rg) || empty($cpf) || empty($data_de_nascimento) || empty($senha) || empty($tipo_usuario)) {
    header("Location: index.php");
} else {
    inserirUsuario($conexao, $nome, $email, $telefone, $rg, $cpf, $data_de_nascimento, $senha, $tipo_usuario);
    if (isset($_COOKIE["loginUsuario"]) && $_COOKIE["loginUsuario"] == "ADM" ) {
        header("Location: selecionarUsuarios.php");
    } else{
        header("Location: index.php");
    }
 }
include("rodape.php");