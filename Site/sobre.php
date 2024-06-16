<!-- Session -->
<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
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
  <!-- Sobre Css -->
  <link rel="stylesheet" href="front/myfront/sobre/sobre.css">

  <title>Rs Mercearia Sobre</title>
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
  <!-- Conteiner -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title_all text-center">
          <h3 class="font-weight-bold">A História<span class="text-custom"> e os Criadores da Rsmercearia</span></h3>
          <p class="section_subtitle mx-auto text-muted">E algumas outras observações sobre nós</p>
        </div>
      </div>
    </div>

    <div class="row vertical_content_manage mt-5">
      <div class="col-lg-6">
        <div class="about_header_main mt-3">
          <h4 class="about_heading font-weight-bold ">História da Rsmercearia</h4>
          <p class="mt-3">Fundada em 2016, a RS Mercearia se consolidou como um gigante em Belford Roxo, próximo ao Lote XV, encantando a comunidade com seu sistema de vendas eficiente e organizado.Para fazer parte da família RS Mercearia, cada cliente precisa ter um login único, nome completo e CPF válido. CEP e telefone são opcionais, mas facilitam o contato e a entrega de pedidos. Cada cliente pode realizar diversos pedidos, construindo um histórico de compras que facilita futuras transações. A magia acontece nos pedidos! Cada um recebe um código único para facilitar a identificação. Mas o que torna um pedido realmente especial? É a lista de itens que ele contém! Cada item possui um código único dentro do pedido, e se relaciona com um produto específico. A quantidade define quantas unidades daquele produto o cliente deseja, e o valor unitário e total garantem uma transação transparente.E para finalizar com chave de ouro, o pedido informa a forma de pagamento escolhida pelo cliente.</p>
          <p class="mt-3"> A RS Mercearia oferece um universo de produtos incríveis! Cada um recebe um código único para facilitar a organização, e o nome do produto deixa claro do que se trata. A categoria define o grupo ao qual ele pertence, e a quantidade em estoque garante que nunca falte nada para os clientes. O valor unitário e o valor total são essenciais para uma compra transparente, e a descrição completa do produto aguça a curiosidade e aumenta as vendas. Para deixar tudo ainda mais organizado, as categorias agrupam produtos por tipo. Cada categoria recebe um código único para identificação e um nome descritivo que facilita a navegação dos clientes.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="img_about mt-3">
          <img src="front/img/sobre/About-us.png" alt="" class="img-fluid mx-auto d-block">
        </div>
      </div>
    </div>
    <!-- Conteiner end -->

    <!-- Membros -->
    <a class="realo" id="nos" href="#nos">
      <div class="row mt-3">
        <div href="#" class="about_detail text-center per" data-toggle="modal" data-target="#modalExemplo1">
          <p class="mt-3 font-weight-bold">Diretor Executivo</p>
          <img class="bd-placeholder-img rounded-circle" src="front/img/sobre/silhoueta.png" alt="" width="150px" height="150px" fill="var(--bs-secondary-color)">
          <p class="edu_desc mt-3 mb-0 font-weight-bold">Gabriel Alves Sandre da Silva</p>
        </div>

        <div class="about_detail text-center per" data-toggle="modal" data-target="#modalExemplo2">
          <p class="mt-3 font-weight-bold">Desenvolvedor full stack</p>
          <img class="bd-placeholder-img rounded-circle" src="front/img/sobre/silhoueta.png" alt="" width="150px" height="150px" fill="var(--bs-secondary-color)">
          <p class="edu_desc mt-3 mb-0 font-weight-bold">Jonathan Morozenviski Toledo</p>
        </div>

        <div class="about_detail text-center per" data-toggle="modal" data-target="#modalExemplo3">
          <p class="mt-3 font-weight-bold">Marketing</p>
          <img class="bd-placeholder-img rounded-circle" src="front/img/sobre/silhoueta.png" alt="" width="150px" height="150px" fill="var(--bs-secondary-color)">
          <p class="edu_desc mt-3 mb-0 font-weight-bold">Samara do Nascimento Gonçalves</p>
        </div>

        <div class="about_detail text-center per" data-toggle="modal" data-target="#modalExemplo4">
          <p class="mt-3 font-weight-bold">xxxxx</p>
          <img class="bd-placeholder-img rounded-circle" src="front/img/sobre/silhoueta.png" alt="" width="150px" height="150px" fill="var(--bs-secondary-color)">
          <p class="edu_desc mt-3 mb-0 font-weight-bold">Maria Clara Lopes Silva</p>
        </div>
      </div>
  </div>
  </a>
  <!--Membros End-->

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
<!-- Modal -->
<div class="modal fade" id="modalExemplo1">
  <div class="modal-dialog" role="document">
    <div class="card-container p1">
      <img class="round" src="" alt="user" />
      <h3>Gabriel Alves Sandre da Silva</h3>
      <h6>Rio de Janeiro</h6>
      <p>text</p>
      <div class="buttons">
        <button class="primary">Contato</button>
      </div>
      <div class="skills">
        <h6>Habilidades</h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-sm" id="modalExemplo2">
  <div class="modal-dialog" role="document">
    <div class="card-container p2">
      <img class="round" src="" alt="user" />
      <h3>Jonathan Morozenviski Toledo</h3>
      <h6>Rio de Janeiro</h6>
      <p>text</p>
      <div class="buttons">
        <button class="primary">Contato</button>
      </div>
      <div class="skills">
        <h6>Habilidades</h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-sm" id="modalExemplo3">
  <div class="modal-dialog" role="document">
    <div class="card-container p3">
      <img class="round" src="" alt="user" />
      <h3>Samara do Nascimento Gonçalves</h3>
      <h6>Rio de Janeiro</h6>
      <p>text</p>
      <div class="buttons">
        <button class="primary">Contato</button>
      </div>
      <div class="skills">
        <h6>Habilidades</h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-sm" id="modalExemplo4">
  <div class="modal-dialog" role="document">
    <div class="card-container p4">
      <img class="round" src="" alt="user" />
      <h3>Maria Clara Lopes Silva</h3>
      <h6>Rio de Janeiro</h6>
      <p>text</p>
      <div class="buttons">
        <button class="primary">Contato</button>
      </div>
      <div class="skills">
        <h6>Habilidades</h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Scripts Js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>