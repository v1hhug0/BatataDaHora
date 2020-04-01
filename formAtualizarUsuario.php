<?php include("cabecalho.php"); ?>
    <body id="formulario" style=""><?php
include("barraNavegacao.php");
include("dbUsuarios.php");
include("conexao.php");
include("mascara.php");

if ($_COOKIE["loginUsuario"] == "ADM" && isset($_POST['id_usuario'])) {
    $id_usuario = $_POST['id_usuario'];
    $tipo_usuario = "A";
} else if ($_COOKIE["loginUsuario"] == "ADM" && isset($_POST['id_usuario']) == false) {
    $id_usuario = $_COOKIE["loginID"];
    $tipo_usuario = "ADM";
} else {
    $id_usuario = $_COOKIE["loginID"];
    $tipo_usuario = "C";
}
$usuario = buscarDadosUsuario($conexao, $id_usuario);
?>
    <h1 id="criarConta">Atualização de Cadastro</h1>
    <div id="tabela">

        <form action="atualizarUsuario.php" method="post">
            <input type="hidden" name="id_usuario" value="<?= $id_usuario ?>">
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome" value="<?= $usuario['nome'] ?>"
                               placeholder="Digite seu nome..." required
                               pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"
                               oninvalid="setCustomValidity('Insira um nome válido.')"
                               onchange="try{setCustomValidity('')}catch(e){}"><br/></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input class="form-control" type="text" name="telefone" value="<?= $usuario['telefone'] ?>"
                               id="telefone" placeholder="(00) 00000-0000" required><br/></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input class="form-control" type="date" name="data_de_nascimento"
                               value="<?= $usuario['data_de_nascimento'] ?>" required min="1000-01-01" max="9999-12-31"><br/>
                    </td>
                </tr>
                <tr>
                    <td>RG:</td>
                    <td><input class="form-control" type="text" name="rg" value="<?= $usuario['rg'] ?>" id="rg"
                               placeholder="0000000-0" required><br/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input class="form-control" type="text" name="cpf" value="<?= $usuario['cpf'] ?>" id="cpf"
                               placeholder="000.000.000-00" required><br/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="form-control" type="email" name="email" value="<?= $usuario['email'] ?>"
                               placeholder="exemplo@email.com" required><br/></td>
                </tr>
                <tr>
                    <td width="30%">Senha:</td>
                    <td><input class="form-control" type="password" name="senha" value="<?= $usuario['senha'] ?>"
                               placeholder="Digite sua senha..." required><br/></td>
                    <td><input type="hidden" name="tipo_usuario" value="<?= $tipo_usuario ?>"></td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

<?php include("rodape.php");