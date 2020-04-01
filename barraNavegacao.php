<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/BatataDaHora">Batata da Hora</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <?php
                if (isset($_COOKIE["loginUsuario"])) {
                    $usuario = $_COOKIE["loginUsuario"];
                }
                if ($usuario == "A") {?>
                    <li><a href="minhaConta.php">Minha Conta</a></li>
                    <li><a href="">Pedidos</a></li>
                <?php } else if ($usuario == "C") { ?>
                    <li><a href="minhaConta.php">Minha Conta</a></li>
                    <li><a href="formAtualizarUsuario.php">Atualizar Dados</a></li>
                    <li><a href="excluirConta.php">Excluir Conta</a></li>
                <?php } else if ($usuario == "ADM") { ?>
                    <li><a href="minhaConta.php">Minha Conta</a></li>
                    <li><a href="formAtualizarUsuario.php">Atualizar Dados</a></li>
                    <li><a href="formUsuario.php">Cadastrar Atendente</a></li>
                    <li><a href="selecionarUsuarios.php">Usuários</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>