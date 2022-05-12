<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <title>Cadastro de Usuário</title>
</head>
<body> 
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Cadastrar
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Login is required">
						<input class="input100" type="text" name="login" placeholder="Login" value="<?php echo isset($usuario)?$usuario->getLogin():''?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Senha is required">
						<input class="input100" type="password" name="senha1" placeholder="Senha" value="<?php echo isset($usuario)?$usuario->getSenha():''?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Senha is required">
						<input class="input100" type="password" name="senha2" placeholder="Confirmar Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Tipo is required">
                        <select name="permissao" id="permissao" class="input100" style="border:none">
                            <option value="0" disabled selected style="color:black">Selecione</option>
                            <option value="A"<?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
                            <option value="C"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':''?>>Comum</option>                       </select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnSalvar">
							Salvar
						</button>
					</div>
					<input type="hidden" name="id" id="id" value="<?php echo isset($usuario)?$usuario->getId():''; ?>" />

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgots
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>

<?php
if(isset($_POST['btnSalvar'])){
    require_once './controller/UsuarioController.php';
    call_user_func(array('UsuarioController','salvar'));
    header('Location: index.php?action=listar');
}
?>