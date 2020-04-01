<?php include("cabecalho.php");
include("conexao.php");
include("dbUsuarios.php");
$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$senha = $_POST['senha'];
$tipo_usuario = $_POST['tipo_usuario'];



if (empty($nome) || empty($email) || empty($telefone) || empty($rg) || empty($cpf) || empty($data_de_nascimento) || empty($senha) || empty($tipo_usuario)) {
    $msgErro = mysqli_error($conexao) ?>
    <p class="text-danger">Usuário <?= $nome ?> Não Foi Atualizado. <?= $msgErro ?></p><?php
} else {
    atualizarUsuario($conexao, $id_usuario, $nome, $email, $telefone, $rg, $cpf, $data_de_nascimento, $senha, $tipo_usuario);
    if ($_COOKIE["loginUsuario"] == "ADM" || $_COOKIE["loginUsuario"] == "C" ){
        header("Location: minhaConta.php");
    } else if ($_COOKIE["loginUsuario"] == "ADM" || $_COOKIE["loginUsuario"] == "C" ){
        header("Location: selecionarUsuarios.php");
    }
}
include("rodape.php");