<?php include("cabecalho.php") ?>
    <body id="formulario"><?php
if (isset($_COOKIE["loginUsuario"])) {
    $usuario = $_COOKIE["loginUsuario"];
}
$tipo_usuario = "C";
//if ($usuario == "C") {
//    $tipo_usuario = "C";
//} else if ($usuario == "ADM") {
//    $tipo_usuario = "A";
//    include ("barraNavegacao.php");
//}
include("mascara.php");?>



    <h1 id="criarConta">Criar sua conta</h1>
    <div id="tabela">
        <form action="inserirUsuario.php" method="post">
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome" placeholder="Digite seu nome..." required
                               autofocus pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"
                               oninvalid="setCustomValidity('Insira um nome válido.')"
                               onchange="try{setCustomValidity('')}catch(e){}"><br/></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input class="form-control" type="text" name="telefone" id="telefone"
                               placeholder="(00) 00000-0000" required><br/></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input class="form-control" type="date" name="data_de_nascimento" required min="1000-01-01"
                               max="9999-12-31" maxlength="8"><br/></td>
                </tr>
                <tr>
                    <td>RG:</td>
                    <td><input class="form-control" type="text" name="rg" id="rg" placeholder="0000000-0" required><br/>
                    </td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input class="form-control" type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                               required><br/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="form-control" type="email" name="email" placeholder="exemplo@email.com"
                               required><br/></td>
                </tr>
                <tr>
                    <td width="30%">Senha:</td>
                    <td><input class="form-control" type="password" name="senha" placeholder="Digite sua senha..."
                               required><br/></td>
                </tr>
                <input type="hidden" name="tipo_usuario" value="<?= $tipo_usuario?>">
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
<?php include("rodape.php");