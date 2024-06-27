<?php
$api = file_get_contents("http://localhost/aula/TechAcademy2/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>








<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner  shadow-sm p-4 mb-5 bg-body-tertiary rounded ">
    
    <div class="carousel-item active">
      <img src="imagens-jogo/omegacollapse.jpeg"width="120" height="680px" class="w-100"  alt="Imagem 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Omega Collaps</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens-jogo/crimsoncurse.png"width="120" height="680px" class="w-100" alt="Imagem 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Crimssoncurse</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens-jogo/meowtopia.jpeg"width="120" height="680px" class="w-100" alt="Imagem 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Meowtopia</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens-jogo/cybergun.jpg"width="120" height="680px" class="w-100" alt="Imagem 4">
      <div class="carousel-caption d-none d-md-block">
        <h5>CyberGun</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens-jogo/flyingchicken.jpeg"width="120" height="680px" class="w-100 " alt="Imagem 5">
      <div class="carousel-caption d-none d-md-block">
        <h5>Flying Chicken</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<h3 class="shadow p-3 mb-5 bg-body-tertiary rounded">
  <p class="text-center">Ofertas Expeciais.</p>
</h3>

<div class="container my-4">
  <div class="row">

      <?php
      foreach ($dadosApi as $jogo) {
      ?>

          <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="card" data-aos="fade-up">
                  <img src="<?= $jogo->logo ?>"width="2px" height="240px" class="card-img-top" alt="<?= $jogo->title ?>">
                  <div class="card-body">
                      <h5 class="card-title fw-bold"><?= $jogo->title ?></h5>
                      <p class="card-text"><?= $jogo->description ?></p>
                      <div class="btn-jogo">
                      <a href="<?= $jogo->jogo ?>" target="_blank" class="btn btn-outline-success me-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                              <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z" />
                          </svg>
                      </a>
                      <a href="<?= $jogo->site ?>"class="btn btn-outline-success me-6" target="_blank">Site do Jogo</a>
                    </div>
                  </div>
              </div>
          </div>






      <?php
      }
      ?>
  </div>
</div>
<script>
  AOS.init();
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 