<?php include("cabecalho.php") ?>
    <body id="index">


    <div id="loginGeral" class="container">
        <div id="divBemVindo" class="container">
            <h1 id="bemVindo">Bem Vindo!</h1>
            <h4 id="msg">Faça seu Login ou <a id="cadastrese" href="http://localhost/BatataDaHora/formUsuario.php">Cadastre-se</a></h4>

        </div>


        <form action="login.php" method="post">
            <div id="tabelaLogin" class="container">
                <table class="table" >

                    <tr>
                        <td style="color: white">Email</td>
                        <td><input class="form-control" type="email" name="email" required autofocus placeholder="exemplo@email.com"></td>
                    </tr>

                    <tr>
                        <td style="color: white">Senha</td>
                        <td><input class="form-control" type="password" name="senha" required placeholder="Digite sua senha..." ></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary">Logar</button></td>
                    </tr>

                </table>
            </div>

        </form>
    </div>



<?php include("rodape.php");