<?php
    require_once './controller/ImovelController.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php
      if(isset($_GET['action'])){
          if($_GET['action'] == 'editar'){
            $usuario = call_user_func(array('ImovelController','editar'), $_GET['id']);
            require_once 'view/cadImovel.php';
          }

          if($_GET['action'] == 'listar'){
            require_once 'view/listImovel.php';
          }

          if($_GET['action'] == 'excluir'){
            $usuario = call_user_func(array('ImovelController','excluir'), $_GET['id']);
            require_once 'view/listUsuario.php';
          }
      }else{
        require_once 'view/cadImovel.php';
      }
    ?>

  </body>
</html>