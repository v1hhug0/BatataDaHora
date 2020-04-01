<?php include("cabecalho.php") ?>
    <body id="pedidos"><?php
include("barraNavegacao.php");
include("conexao.php");
include("dbUsuarios.php");
$id_usuario = $_COOKIE["loginID"];

?>

        <?php
        $minhaconta = buscarDadosUsuario($conexao, $id_usuario);
        ?>


    <h1 id="meusDados">Meus Dados</h1>
    <div id="tabelaMeusDados">
        <table class="table">
            <tr>
                <td style="color: black">Nome:</td>
                <td><input class="form-control" type="text" name="nome" readonly value="<?= $minhaconta['nome'] ?>"><br/></td>
            </tr>
            <tr>
                <td style="color: black">Telefone:</td>
                <td><input class="form-control" type="text" name="telefone" readonly value="<?= $minhaconta['telefone'] ?>"><br/></td>
            </tr>
            <tr>
                <td style="color: black">Data de Nascimento:</td>
                <td><input class="form-control" type="date" name="data_de_nascimento" readonly value="<?= $minhaconta['data_de_nascimento'] ?>" ><br/></td>
            </tr>
            <tr>
                <td style="color: black">RG:</td>
                <td><input class="form-control" type="text" name="rg" readonly value="<?= $minhaconta['rg'] ?>"><br/>
                </td>
            </tr>
            <tr>
                <td style="color: black">CPF:</td>
                <td><input class="form-control" type="text" name="cpf" readonly value="<?= $minhaconta['cpf'] ?>"><br/></td>
            </tr>
            <tr>
                <td style="color: black">Email:</td>
                <td><input class="form-control" type="email" name="email" readonly value="<?= $minhaconta['email'] ?>"><br/>
                </td>
            </tr>
            <tr>
                <td style="color: black" width="30%">Senha:</td>
                <td><input class="form-control" type="password" name="senha" readonly value="<?= $minhaconta['senha'] ?>"><br/>
                </td>
            </tr>
            <input type="hidden" name="tipo_usuario" value="C">
        </table>
    </div>


<?php include("rodape.php");
?>