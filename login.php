<?php include ("conexao.php");
include ("dbUsuarios.php");

$usuario = buscarLoginDB($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    header("Location: index.php");
} else if ($usuario != null && $usuario['tipo_usuario'] == 'C') {
    setcookie("usuarioLogado", $usuario["email"], time()+10);
    setcookie("loginID", $usuario["id_usuario"]);
    setcookie("loginUsuario", $usuario["tipo_usuario"]);
    header("Location: efetuarPedido.php");
    die();
} else if ($usuario != null && $usuario['tipo_usuario'] == 'A'){
    setcookie("usuarioLogado", $usuario["email"], time()+10);
    setcookie("loginID", $usuario["id_usuario"]);
    setcookie("loginUsuario", $usuario["tipo_usuario"]);
    header("Location: gerenciarPedidos.php");
    die();
} else if ($usuario != null && $usuario['tipo_usuario'] == 'ADM'){
    setcookie("usuarioLogado", $usuario["email"], time()+10);
    setcookie("loginID", $usuario["id_usuario"]);
    setcookie("loginUsuario", $usuario["tipo_usuario"]);
    header("Location: gerenciarPedidos.php");
    die();
}
