<DOCTYPE html>
<html lang="pt-br">
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
	<link rel="stylesheet" href="front/myfront/index/index.css">
	<script src="front/myfront/index/index.js"></script>
	<!-- Externo CSS/Js-->
	<link rel="stylesheet" href="front/externo/index/docs.theme.min.css">
    <link rel="stylesheet" href="front/externo/index/owl.carousel.min.css">
    <script src="front/externo/index/owl.carousel.js"></script>
	<script src="front/externo/index/jquery.mousewheel.min.js"></script>
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
				<a class="dropdown-item" href="pareciveis.php">Parecíveis</a>
				<a class="dropdown-item" href="limpeza.php">Limpeza</a>
				<a class="dropdown-item" href="papelaria.php">Papelaria</a>
				<a class="dropdown-item" href="outros.php">Outros</a>
			</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="carrinho.php"><img src="front/img/carrinho.ico" width="20" height="20" alt="Categorias"> Carrinho</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php"><img src="front/img/perfil.ico" width="20" height="20" alt="Categorias"> Perfil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sobre.php"><img src="front/img/sobre.ico" width="20" height="20" alt="Categorias"> Sobre</a>
			</li>
		</ul>
		</div>
	</nav>
	<main role="main">
    <!-- Menu end -->
	<div class="scar">
	<br>
		<!-- Carrosseu start-->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
        
			<div class="carousel-item active">
				<a href="produto.php"><img class="d-block w-100" src="front/img/index/caurosel-top/banner1.jpg" width="500" height="400" alt="Primeiro Slide"></a>
			</div>
			<div class="carousel-item">
				<a href="https://twitter.com/"><img class="d-block w-100" src="front/img/index/caurosel-top/banner2.jpg" width="500" height="400" alt="Segundo Slide"></a>
			</div>
			<div class="carousel-item">
				<a href="https://www.instagram.com/"><img class="d-block w-100" src="front/img/index/caurosel-top/banner3.jpg" width="500" height="400" alt="Terceiro Slide"></a>
			</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
			</a>
		</div>
		<br>
		</div>
		<!-- Carrosseu end-->
    <!-- Cards start-->
	<div class="header">
		<div class="header-title">Categorias de produtos</div>
	</div>
	<div class="container">

		<a href="pareciveis.php"><div class="card card-1">
			<div class="card-content">
				<div class="title">Perecíveis</div>
				<p>Enlatados, picole, carne, alimentos no geral.</p>
			</div>
		</div></a>

		<a href="limpeza.php"><div class="card card-2">
			<div class="card-content">
				<div class="title">Limpeza</div>
				<p>Produtos de limpeza no geral, e utensílios que ajudam a arrumar e organizar sua moradia.</p>
			</div>
		</div></a>

		<a href="papelaria.php"><div class="card card-3">
			<div class="card-content">
				<div class="title">Papelaria</div>
				<p>Acessórios escolares, de escritorio, utilitarios de anotação, entre outros..</p>
			</div>
		</div></a>

		<a href="outros.php"><div class="card card-4">
			<div class="card-content">
				<div class="title">Outros</div>
				<p>Objetos variados, que não e enquadra em nenhuma das categorias acima.</p>
			</div>
		</div></a>
	</div>
<!-- Card end-->
<!-- Carrossel_prod start-->

<div class="header-prod">
	<div class="header-title">Produtos em destaque</div>
</div>
<section id="demos">
	<div class="roww">
	<div class="large-15 columns">
		<div class="owl-carousel owl-theme">

			<div class="item" >
				<a href="produto.php"><div class="item-card icard-1">
					<div class="title">Picolé</div>
					<p class="uni">R$2.00 comum R$3.00 especial</p>
				</div></a>
			</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-2">
				<div class="title">Sacolé</div>
				<p class="uni">R$1.00 a unidade</p>
			</div></a>
		</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-3">
				<div class="title">Massa de bolo Regina</div>
				<p class="uni">R$5.50 a unidade</p>
			</div></a>
		</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-4">
				<div class="title">Molho de tomate Pramesa</div>
				<p class="uni">R$2.00 a unidade</p>
			</div></a>
		</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-5">
				<div class="title">Papel higiênico Max</div>
				<p class="uni">R$6.00 o pacote</p>
			</div></a>
		</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-6">
				<div class="title">Vassoura piaçava</div>
				<p class="uni">R$11.00 a unidade</p>
			</div></a>
		</div>
		<div class="item" >
			<a href="produto.php"><div class="item-card icard-7">
				<div class="title">Alvejante Casa&Perfume</div>
				<p class="uni">R$6.00 a unidade</p>
			</div></a>
		</div>
		</div>
		</div>
	</div>
<!-- Carrosel_prod end-->
<br>
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
        <a href="https://www.facebook.com/"><li class="nav-link" ><i class="fab fa-facebook fa-3x "></i></li></a>
        <a href="https://www.instagram.com/"><li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li></a>
        <a href="https://twitter.com/"><li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li></a>
        <a href="https://whatsapp.com/"><li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li></a>
        </ul>
    </div>
    </div>
    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;" >
    Rsmercearia -2016, 2024-</a>
    </div>
</footer>
<!-- Rodape end-->

</body>
</html>