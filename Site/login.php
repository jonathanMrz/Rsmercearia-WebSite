<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS/Js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- Meu CSS/Js-->
    <link rel="stylesheet" href="front/myfront/all.css">
	<link rel="stylesheet" href="front/myfront/login/login.css">
    <script src="front/myfront/login/login.js"></script>
	<!-- Externo CSS/Js-->
	<script  src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="img-back">
    <a href="index.php"><div class="loginless">Só olhar</div></a>
		<div class="veen">
			<div class="login-btn splits">
				<p>Já é usuário?</p>
				<button class="">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Não tem uma conta?</p>
				<button class="">Registrar</button>
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
						<button class="">Login</button>
					</div>
				</form>
				<form action="backend/login/login.php" method="POST" id="register" tabindex="502">
					<h3>Criar conta</h3>
					<div class="name">
						<input name="nome" id="nome" type="text" maxlength="100">
						<label>Nome completo</label>
					</div>
					<div class="mail">
						<input name="email" id="telefone" type="email" maxlength="100">
						<label>E-mail</label>
					</div>
                    <div class="telefone">
                        <input name="telefone" id="telefone" type="tel" id="phone" maxlength="15">
						<label for="phone">Telefone</label>
					</div>
					<div class="cpf">
						<input name="cpf" id="cpf" type="text" maxlength="20">
						<label>CPF</label>
					</div>
					<div class="passwd">
						<input name="senha" id="senha type="password" maxlength="30">
						<label>Senha</label>
					</div>
					<div class="Enviar">
						<button name="enviar" id="enviar" type="submit" class="">Registrar</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
</body>
</html>