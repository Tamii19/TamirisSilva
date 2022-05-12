<?php
    require_once './controller/UsuarioController.php';
?>
<html>
<head>
<h1>Usuários</h1>
<hr>
<div>
    <table style="top:40px">
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="cadUsuario">Novo</th>
            </tr>
        </head>
        <body>
            <?php
            $usuarios = call_user_func(array('UsuarioController','listar'));
            if(isset($usuarios) && !empty($usuarios)){
                foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario->getLogin(); ?></td>
                        <td><?php echo $usuario->getPermissao(); ?></td>
                        <td>
                            <a href="index.php?action=editar&id=<?php echo $usuario->getId();?>">Editar</a>
                            <a href="index.php?action=excluir&id=<?php echo $usuario->getId();?>">Excluir></a>
                        </td>
                    </tr>
                    <?php
                }
            }else{
                ?>
                <tr>
                    <td colspan="S">Nenhum resgistro encontrado</td>
                </tr>
                <?php 
            }
            ?>
        </body>
    </table>
</div>
</html>