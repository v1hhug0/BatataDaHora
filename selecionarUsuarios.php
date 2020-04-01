<?php include("cabecalho.php") ?>
    <body id="geral"><?php
include("barraNavegacao.php");
include("conexao.php");
include("dbUsuarios.php");

?>
    <table class="table" style="background-color: snow">
        <tr>
            <td>Usuário</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Data de Nascimento</td>
            <td>RG</td>
            <td>CPF</td>
            <td>Email</td>
        </tr>
        <?php
        $usuarios = selecionarUsuarios($conexao);
        foreach ($usuarios as $usuario) :
            if ($usuario['tipo_usuario'] == "A"){
                $tipo = "Atendente";
            }else{
                $tipo = "Cliente";
            }
            ?>
            <tr>
                <td><?= $tipo ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['telefone'] ?></td>
                <td><?= date('d/m/Y', strtotime($usuario['data_de_nascimento'])); ?></td>
                <td><?= $usuario['rg'] ?></td>
                <td><?= $usuario['cpf'] ?></td>
                <td><?= $usuario['email'] ?></td>
               <?php if ($usuario['tipo_usuario'] == "A"){?>
                   <td>
                       <form action="formAtualizarUsuario.php" method="post">
                           <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                           <button class="btn btn-primary">Atualizar</button>
                       </form>
                   </td>

                   <td>
                       <form action="excluirUsuario.php" method="post">
                           <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                           <button class="btn btn-danger">Excluir</button>
                       </form>
                   </td>
               <?php }?>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
<?php include("rodape.php");