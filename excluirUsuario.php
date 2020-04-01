<?php include("conexao.php");
include("dbUsuarios.php");
if (isset($_COOKIE["loginUsuario"]) && $_COOKIE["loginUsuario"] == "ADM" && isset($_POST['id_usuario']) ) {
    $id_usuario = $_POST['id_usuario'];
} else{
    $id_usuario = $_COOKIE["loginID"];
}

if (excluirUsuario($conexao, $id_usuario)) {
    if (isset($_COOKIE["loginUsuario"]) && $_COOKIE["loginUsuario"] == "ADM" && isset($_POST['id_usuario']) ) {
        header("Location: selecionarUsuarios.php");
    } else{
        header("Location: index.php");
    }
die();
}