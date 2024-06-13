<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: index.php");
}
?>
<html>

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
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>

<body>
	<div class="img-back">
		<div class="alerts">
			<?php
			if (isset($_POST["register"])) {
				$fullname = $_POST["fullname_reg"];
				$email = $_POST["email_reg"];
				$tell = $_POST["tell_reg"];
				$password = $_POST["password_reg"];
				$passwordhash = password_hash($password, PASSWORD_DEFAULT);
				$errors = array();
				if (empty($fullname) or empty($email) or empty($tell) or empty($password)) {
					array_push($errors, "Todos campos precisam estar preenchidos");
				}
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					array_push($errors, "Email não é valido");
				}
				if (strlen($password) < 8) {
					array_push($errors, "A senha precisa ter 8 caracteres ou mais");
				}
				require_once "backend/conexao.php";
				$sql = "SELECT * FROM Users WHERE email = '$email'";
				$result = mysqli_query($conn, $sql);
				$rowCount = mysqli_num_rows($result);
				if ($rowCount > 0) {
					array_push($errors, "Esté email já está registrado");
				}
				if (count($errors) > 0) {
					foreach ($errors as $error) {
						echo "<p class='false'>-$error</p>";
					}
				} else {
					$sql = "INSERT INTO Users (fullname, email , tell , password) VALUES ( ?, ?, ?, ? )";
					$stmt = mysqli_stmt_init($conn);
					$prepareStmt = mysqli_stmt_prepare($stmt, $sql);
					if ($prepareStmt) {
						mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $tell, $passwordhash);
						mysqli_stmt_execute($stmt);
						echo "<div class='true'>-Registrado com sucesso</div>";
					} else {
						echo "<div class='false'>-Alguma coisa está muito errada..</div>";
						die();
					}
				}
			}
			?>
			<?php
			if (isset($_POST["login"])) {
				$email = $_POST["email_log"];
				$password = $_POST["password_log"];
				require_once "backend/conexao.php";
				$sql = "SELECT * FROM Users WHERE email = '$email'";
				$result = mysqli_query($conn, $sql);
				$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
				if ($user) {
					if (password_verify($password, $user["password"])) {
						session_start();
						$_SESSION["user"] = "yes";
						header("Location: index.php");
						die();
					} else {
						echo "<div class='false'>-Senha invalido</div>";
					}
				} else {
					echo "<div class='false'>-Email invalido</div>";
				}
			}
			?>
		</div>

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

				<form action="login.php" method="post" id="login">
					<h3>Login</h3>
					<div class="grup-log">
						<input name="email_log" type="text">
						<label>E-mail</label>
					</div>
					<div class="grup-log">
						<input name="password_log" type="password">
						<label>Senha</label>
					</div>
					<div class="grup-log">
						<input name="login" type="submit" class="button" value="Login">
					</div>
				</form>

				<form action="login.php" method="post" id="register">
					<h3>Criar conta</h3>
					<div class="grup-reg">
						<input name="fullname_reg" type="text">
						<label>Nome completo</label>
					</div>
					<div class="grup-reg">
						<input name="email_reg" type="text">
						<label>E-mail</label>
					</div>
					<div class="grup-reg">
						<input name="tell_reg" type="tel">
						<label>Telefone</label>
					</div>
					<div class="grup-reg">
						<input name="password_reg" type="password">
						<label>Senha</label>
					</div>
					<div class="grup-reg">
						<input name="register" type="submit" class="button" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>