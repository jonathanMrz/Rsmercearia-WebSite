
<!DOCTYPE html>
<html lang="en">
<head>
         <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS/Js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- Meu CSS/Js-->
    <link rel="stylesheet" href="/Site/front/.myfront/all.css">
	<link rel="stylesheet" href="/Site/front/.myfront/login/login.css">
    <script src="/Site/front/.myfront/login/login.js"></script>
	<!-- Externo CSS/Js-->

    <title>Login</title>
</head>
<body>
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="body">
    <a href="/Site/index.html"><div class="loginless">Só olhar</div></a>
		<div class="veen">
			<div class="login-btn splits">
				<p>Já é usuário?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Não tem uma conta?</p>
				<button>Registrar</button>
			</div>
			<div class="wrapper">
				<form id="login" tabindex="500">
					<h3>Login</h3>
					<div class="email">
						<input type="email" name="">
						<label>E-mail</label>
					</div>
					<div class="senha">
						<input type="password" name="">
						<label>Senha</label>
					</div>
					<div class="submit">
						<button class="dark">Login</button>
					</div>
				</form>
				<form action="/Site/backend/login/login.php" method="POST" id="register" tabindex="502">
					<h3>Criar conta</h3>
					<div class="name">
						<input name="nome" type="text" maxlength="100" name="">
						<label>Nome completo</label>
					</div>
					<div class="mail">
						<input name="email" type="email" maxlength="100" name="">
						<label>E-mail</label>
					</div>
                    <div class="telefone">
                        <input name="telefone" type="tel" id="phone" name="phone" maxlength="15">
						<label for="phone">Telefone</label>
					</div>
					<div class="passwd">
						<input name="senha" type="password" maxlength="30" name="">
						<label>Senha</label>
					</div>
					<div class="Enviar">
						<button name="enviar" type="submit" class="dark">Registrar</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<?php
	if (isset($_POST['enviar'])){
		print_r($_POST['nome']);
		print_r($_POST['email']);
		print_r($_POST['telefone']);
		print_r($_POST['senha']);
	}
	?php>
</body>
</html>