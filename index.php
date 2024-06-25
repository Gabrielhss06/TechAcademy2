<?php
$api = file_get_contents("https://buyhubgs.000webhostapp.com/aula/TechAcademy2/api/games.php");
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
  <base href="https://buyhubgs.000webhostapp.com/aula/TechAcademy2/">
  <!-- alterar qunado colocar  site no ar  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="img/6c919a27-6387-4889-9e28-70efb0ccd8f4.jpg">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="home"><img src="imagem/buyhub.png" alt="BuyHub" style="width: 130px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Aqui você pode adicionar outros itens de menu se necessário -->
           </ul>
          <div class="d-flex">
            <div class="dropdown">
              <button class="btn btn-outline-success dropdown-toggle me-2" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">
                Jogos Free
              </button>

              <ul class="dropdown-menu me-auto mb-2" aria-labelledby="dropdownMenuButton">
                <?php
            foreach ($dadosApi as $jogo) {
              ?>
                <li>
                  <a class="dropdown-item btn btn-outline-success me-2" href="<?= $jogo->link ?>" target="_blank">
                    <?= $jogo->title ?>
                  </a>
                </li>
                <?php
              }
            ?>
              </ul>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-outline-success me-2" aria-current="page" href="home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success me-2" aria-current="page" href="contato">CONTATO</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success me-2" aria-current="page" href="desenvolvedores">QUEM SOMOS</a>
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
      $p = explode("/", $param);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
      $pagina = "jogo/{$jogo}.php";

    } else {
      $pagina = "paginas/{$page}.php";
    }

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
                Bem-vindo ao <strong>BuyHub</strong>, seu destino final para jogos online de alta
                qualidade! Desde nossa fundação, temos o compromisso de oferecer a melhor experiência de
                jogos para nossos usuários.
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
                <a href="https://www.instagram.com/gabriel_s.speciam?igsh=MTZ6anFveDFnZGZ3cQ==" target="_blank"
                  class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/Gabrielhss06" target="_blank" class="text-dark"><i
                    class="fab fa-github"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024
      <a class="text-dark"></a>
    </div>
  </footer>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

  <script>
    AOS.init();
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>