<?php
session_start();

# If search key is not set or empty
if (!isset($_GET['key']) || empty($_GET['key'])) {
	header("Location: index.php");
	exit;
}
$key = $_GET['key'];

# Database Connection File
include "backend/func/db_conn.php";

# item helper function
include "backend/func/func-item.php";
$Items = search_Items($conn, $key);

# categoria helper function
include "backend/func/func-categoria.php";
$Categorias = get_all_Categorias($conn);

?>

<html>

<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="front/img/logo.ico">
	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<!-- All CSS -->
	<link rel="stylesheet" href="front/externo/index/docs.theme.min.css">
	<link rel="stylesheet" href="front/myfront/index/index.css">
	<link rel="stylesheet" href="front/myfront/all.css">
	<!-- One CSS -->
	<title>Rsmercearia Store</title>
</head>

<body>

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
						<a class="dropdown-item" href="store.php">Store</a>
						<a class="dropdown-item" href="categoria.php?id=1">Parecíveis</a>
						<a class="dropdown-item" href="categoria.php?id=2">Limpeza</a>
						<a class="dropdown-item" href="categoria.php?id=3">Papelaria</a>
						<a class="dropdown-item" href="categoria.php?id=4">Outros</a>
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
				<?php if ($_SESSION["email"] == "admin@gmail.com") { ?>
					<li class="nav-item">
						<a class="nav-link" href="administração.php"><img src="front/img/admin.ico" width="20" height="20" alt="Administração"> Administração</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>
	<!-- Menu End -->
	<h1 class="display-4 p-3 fs-3">
		<a href="index.php" class="nd">
			<img src="img/back-arrow.PNG" width="35">
		</a>
		<?= $current_category['name'] ?>
	</h1>
	<div class="container">
		Resultado da pesquisa: <b><?= $key ?></b>

		<div class="d-flex pt-3">
			<?php if ($Items == 0) { ?>
				<div class="alert alert-warning text-center p-5 pdf-list" role="alert">
					<img src="img/empty-search.png" width="100">
					<br>
					<b>"<?= $key ?>"</b> não é um produto presente em nosso catalogo
				</div>
			<?php } else { ?>
				<div class="pdf-list d-flex flex-wrap">
					<?php foreach ($Items as $item) { ?>
						<div class="card m-1">
							<img src="img/<?= $item['img'] ?>" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">
									<?= $item['nome'] ?>
								</h5>
								<p class="card-text">

									R$<?= $item['valor'] ?>
									<br><i><b>categoria:
											<?php foreach ($Categorias as $categoria) {
												if ($categoria['id'] == $item['id_categoria']) {
													echo $categoria['nome'];
													break;
												}
											?>

											<?php } ?>
											<br></b></i>
								</p>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>

	<!-- Rodape start-->
	<footer class="bg-dark text-light">
		<div class="container-fluid py-3">
			<div class="row">
				<div class="col-4">
					<ul class="nav rodap flex-column">
						<li class="nav-link"><a href="#">Retornar à Loja</a></li>
						<li class="nav-link"><a href="#">Sobre</a></li>
						<li class="nav-link"><a href="#">Contato</a></li>
						<li class="nav-link"><a href="#">Suporte</a></li>
					</ul>
				</div>
				<div class="col-8">
					<p>
						Veja mais sobre a empresa em nossas redes sociais
					</p>
					<ul class="nav rodap">
						<a href="https://www.facebook.com/">
							<li class="nav-link"><i class="fab fa-facebook fa-3x "></i></li>
						</a>
						<a href="https://www.instagram.com/">
							<li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li>
						</a>
						<a href="https://twitter.com/">
							<li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
						</a>
						<a href="https://whatsapp.com/">
							<li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
						</a>
					</ul>
				</div>
			</div>
		</div>
		<div class="text-center" style="background-color: #333; padding: 20px;">
			Rsmercearia -2016, 2024-</a>
		</div>
	</footer>
	<!-- Rodape end-->
</body>

</html>
<!-- Scripts Js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>