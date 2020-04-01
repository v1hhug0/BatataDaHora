<?php
function inserirUsuario($conexao, $nome, $email, $telefone, $rg, $cpf, $data_de_nascimento, $senha, $tipo_usuario)
{
    $insert = "insert into usuario (tipo_usuario, nome, telefone, data_de_nascimento, rg, cpf, senha, email) values ('{$tipo_usuario}','{$nome}','{$telefone}','{$data_de_nascimento}','{$rg}','{$cpf}','{$senha}','{$email}')";
    return mysqli_query($conexao, $insert);
}

function selecionarUsuarios($conexao)
{
    $usuarios = [];
    $select = mysqli_query($conexao, "SELECT * FROM usuario WHERE tipo_usuario = 'A' OR tipo_usuario = 'C' ORDER BY tipo_usuario;");
    while ($usuario = mysqli_fetch_assoc($select)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function excluirUsuario($conexao, $id_usuario)
{
    $delete = "delete from usuario where id_usuario = {$id_usuario}";
    return mysqli_query($conexao, $delete);
}

function buscarDadosUsuario($conexao, $id_usuario)
{
    $select = "select * from usuario where id_usuario = {$id_usuario}";
    $resultado = mysqli_query($conexao, $select);
    return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($conexao, $id_usuario, $nome, $email, $telefone, $rg, $cpf, $data_de_nascimento, $senha, $tipo_usuario)
{
    $update = "update usuario set nome = '{$nome}', email = '{$email}', telefone = '{$telefone}', rg = '{$rg}', cpf = '{$cpf}', data_de_nascimento = '{$data_de_nascimento}', senha = '{$senha}', tipo_usuario = '{$tipo_usuario}' where id_usuario = '{$id_usuario}'";
    return mysqli_query($conexao, $update);
}

function buscarLoginDB ($conexao, $email, $senha) {
    $select = "select * from usuario where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $select);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}