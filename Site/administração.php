
<?php
session_start();

if ($_SESSION["email"]!="admin@gmail.com"){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>


<head>
	<!-- Meta tags -->
	<link rel="icon" type="image/png" href="front/img/logo.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<!-- Meu CSS -->
	<link rel="stylesheet" href="front/externo/index/docs.theme.min.css">
	<link rel="stylesheet" href="front/myfront/all.css">
	<!-- Externo CSS -->
	<title>Rs Mercearia</title>
</head>

<body>
	<!-- Code start-->
	<!-- Menu start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" style="size: 250px;" href="index.php">
			<img src="front/img/logo.ico" width="50" height="50" class="d-inline-block align-top" alt="">
			<font size="6">Rs Mercearia</font>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="front/img/categoria.ico" width="25" height="25" alt="Categorias"> Categorias de produto
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="produto.php">Buscar</a>
						<a class="dropdown-item" href="pareciveis.php">Parecíveis</a>
						<a class="dropdown-item" href="limpeza.php">Limpeza</a>
						<a class="dropdown-item" href="papelaria.php">Papelaria</a>
						<a class="dropdown-item" href="outros.php">Outros</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="carrinho.php"><img src="front/img/carrinho.ico" width="20" height="20" alt="Categorias"> Carrinho</a>
				</li>
				<li class="nav-item dropdown user">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="front/img/user.ico" width="25" height="25" alt="Categorias"> <?php echo $_SESSION["name"]; ?></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="logout.php">Sair da conta</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sobre.php"><img src="front/img/sobre.ico" width="20" height="20" alt="Categorias"> Sobre</a>
				</li>
				<?php
				if ($_SESSION["email"]=="admin@gmail.com"){
					echo '<li class="nav-item">
					<a class="nav-link" href="administração.php"><img src="front/img/admin.ico" width="20" height="20" alt="Administração"> Administração</a>
				</li>';
				}

				?>
			</ul>
		</div>
	</nav>
	<main role="main">
		<!-- Menu end -->