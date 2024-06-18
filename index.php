<?php
$api = file_get_contents("http://localhost/aula/TechAcademy2/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>







<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyHub</title>
    <!-- LINKS -->
    <base  href="http://localhost/aula/TechAcademy2/">
    <!-- alterar qunado colocar  site no ar  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 

    <link rel="stylesheet" href="css/style.css">
    
    <link rel="shortcut icon" href="img/6c919a27-6387-4889-9e28-70efb0ccd8f4.jpg">

</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/1718060654422 (3).png" alt="BuyHub" style="width: 130px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Aqui você pode adicionar outros itens de menu se necessário -->
      </ul>
      <div class="d-flex">
        <div class="dropdown">
          <button class="btn btn-outline-success dropdown-toggle me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Jogos Free
          </button>
          <?php
      foreach ($dadosApi as $jogo) {
      ?>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="<?= $jogo->title ?>"><?= $jogo->title ?></a></li>
          </ul>
          <?php }
          ?>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="btn btn-outline-success me-2" aria-current="page" href="home">HOME</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-outline-success me-2" aria-current="page" href="contato">CONTATO</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-outline-success me-2" aria-current="page" href="quemsomos">QUEM SOMOS</a>
          </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

      <main>
      <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            //separar o pagametro por /
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        //verificar se a pagina exite
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>
      <footer class="bg-body-tertiary text-center text-lg-start mt-5">
        <div class="container p-4">
          <div class="row">
            <div class="row">
              <div class="col">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Sobre</h5>
                    <p>
                      Bem-vindo ao <strong>BuyHub</strong>, seu destino final para jogos online de alta qualidade! Desde nossa fundação, temos o compromisso de oferecer a melhor experiência de jogos para nossos usuários.
                    </div>
              </div>
              <div class="col">
                <!-- Contact -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0 ">
                <h5 class="text-uppercase">Contato</h5>
                <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt"></i> Endereço: AV Rio de Janeiro</li>
                  <li><i class="fas fa-phone"></i> Telefone: (44) 999967921</li>
                  <li><i class="fas fa-envelope"></i> Email: gabrielkidss22@gmail.com</li>
                </ul>
                <div class="mt-3">
                  <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Copyright:
          <a class="text-dark" href="?param=contato">seusite.com</a>
        </div>
      </footer>
      
      <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome for Icons -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
      
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
</body>
</html>
