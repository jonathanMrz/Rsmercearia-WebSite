<!-- Session -->
<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}
$id = $_GET['id'];
include "backend/func/db_conn.php";
include "backend/func/func-item.php";
$Items = get_Items_by_categoria($conn, $id);
include "backend/func/func-categoria.php";
$Categorias = get_all_Categorias($conn);
$current_categoria = get_categoria($conn, $id);
?>
<html>

<head>
	<!-- Required Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="front/img/logo.ico">
	<!-- All Css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="front/.bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="front/myfront/all.css">
	<link rel="stylesheet" href="front/externo/docs.theme.min.css">
	<!-- Search Css -->
	<link rel="stylesheet" href="front/myfront/search.css">

	<title>Rs Mercearia Categoria</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<!-- Home Page -->
		<a class="navbar-brand" href="index.php">
			<img src="front/img/logo.ico" width="50" height="50" class="d-inline-block align-top" alt="">
			<font size="6">Rs Mercearia</font>
		</a>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<!-- Products -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="front/img/categoria.ico" width="25" height="25" alt="Categorias"> Produtos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="geral.php">Geral</a>
						<a class="dropdown-item" href="categoria.php?id=1">Parecíveis</a>
						<a class="dropdown-item" href="categoria.php?id=2">Limpeza</a>
						<a class="dropdown-item" href="categoria.php?id=3">Papelaria</a>
						<a class="dropdown-item" href="categoria.php?id=4">Outros</a>
					</div>
				</li>
				<!-- Cart -->
				<li class="nav-item">
					<a class="nav-link" href="carrinho.php"><img src="front/img/carrinho.ico" width="20" height="20" alt="Categorias"> Carrinho</a>
				</li>
				<!-- Account -->
				<li class="nav-item dropdown user">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="front/img/user.ico" width="25" height="25" alt="Categorias"> <?php echo $_SESSION["name"]; ?></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="logout.php">Sair da conta</a>
					</div>
				</li>
				<!-- About -->
				<li class="nav-item">
					<a class="nav-link" href="sobre.php"><img src="front/img/sobre.ico" width="20" height="20" alt="Categorias"> Sobre</a>
				</li>
				<!-- Administration -->
				<?php if ($_SESSION["email"] == "admin@gmail.com") { ?>
					<li class="nav-item">
						<a class="nav-link" href="administração.php"><img src="front/img/admin.ico" width="20" height="20" alt="Administração"> Administração</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>
	<!-- Navbar End -->
	<div class="containerr">
		<!-- Search Bar -->
		<form action="busca.php" method="get" style="width: 100%; max-width: 30rem">
			<div class="input-group my-3 grinp">
				<input type="text" class="form-control sinput" name="key" placeholder="Buscar produto..." aria-label="Buscar produto..." aria-describedby="basic-addon2">
				<button class="input-group-text btn sbnt" id="basic-addon2">
					<img src="front/img/search.ico" width="20">
				</button>
			</div>
		</form>
		<!-- Return Button -->
		<h class="comeback">
			<a href="javascript:history.back()" class="nd"><img src="front/img/return.ico" width=""></a>
			<?= $current_categoria['nome'] ?>
		</h>
		<!-- Items -->
		<div class="d-flex pt-3">
			<?php if ($Items == 0) { ?>
				<div class="alert alert-warning text-center p-5" role="alert">
					<img src="img/empty.png" width="100">
					<br>
					Não tem nada no Database
				</div>
			<?php } else { ?>
				<!-- Items Show -->
				<div class="pdf-list d-flex flex-wrap">
					<?php foreach ($Items as $item) { ?>
						<div class="card item-show">
							<img src="front/img/produto/<?= $item['img'] ?>" class="card-img-top">
							<div class="card-body">
								<h class="card-title"><?= $item['nome'] ?></h>
								<p class="card-text">Preço: R$<?= $item['valor'] ?>
									<br>Categoria:
									<?php foreach ($Categorias as $categoria) {
										if ($categoria['id'] == $item['id_categoria']) {
											echo $categoria['nome'];
											break;
										}
									}?>
								</p>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<!-- Categories -->
			<div class="category">
				<div class="list-group">
					<?php if ($Categorias == 0) {
					} else { ?>
						<a href="" class="cat">Categorias Produto</a>
						<?php foreach ($Categorias as $categoria) { ?>
							<a href="categoria.php?id=<?= $categoria['id'] ?>" class="list-group-item list-group-item-action">
								<?= $categoria['nome'] ?></a>
					<?php }
					} ?>
				</div>
			</div>
			<!-- Categories End -->
		</div>
	</div>
	<br>
	<!-- Footer -->
	<footer class="bg-dark text-light">
		<div class="container-fluid py-3">
			<div class="row">
				<!-- Left Links -->
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
					<!-- Main Links -->
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
	<!-- Footer End-->
</body>

</html>
<!-- Scripts Js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="front/.bootstrap/js/bootstrap.min.js"></script>